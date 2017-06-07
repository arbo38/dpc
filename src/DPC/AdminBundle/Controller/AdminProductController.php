<?php

namespace DPC\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use DPC\StoreBundle\Entity\Product;
use DPC\AdminBundle\Entity\ProductSearch;
use DPC\AdminBundle\Form\ProductSearchType;
use DPC\StoreBundle\Form\ProductType;
use DPC\AdminBundle\Form\AdminActionType;
use DPC\AdminBundle\Form\CustomFormClass\AdminAction;

/**
 * @Security("has_role('ROLE_ADMIN')")
 */
class AdminProductController extends Controller
{
    private $nbPerPage = 6; // Pagination

    public function showProductsAction(Request $request, $page = 1)
    {
        // Gestion de la pagination
        if ($page < 1) 
        {
          throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        $productSearch = new ProductSearch();
        $productSearchForm = $this->createForm(ProductSearchType::class, $productSearch);
        $title = "Catalogue";
        
        // En cas de recherche de produits
        if($request->isMethod('POST') &&  $productSearchForm->handleRequest($request)->isValid())
        {
            $listProducts = $this->searchProduct($productSearch, $page);
            $request->getSession()->getFlashBag()->add('notice', count($listProducts) . ' produits correspondent à votre recherche.');
            return $this->render(
                'DPCAdminBundle:admin/product:show_products.html.twig', 
                array('listProducts' => $listProducts, 'title' => $title, 'productSearchForm' => $productSearchForm->createView())
                );
        } 
        else {
            $listProducts = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->getCatalogueProducts($page, $this->nbPerPage);
        }

        // Dans tous les cas 
        $nbPages = ceil(count($listProducts) / $this->nbPerPage);

        if ($page > $nbPages) 
        {
          throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }
        
        return $this->render('DPCAdminBundle:admin/product:show_products.html.twig', array('listProducts' => $listProducts, 'title' => $title, 'productSearchForm' => $productSearchForm->createView(), 'page' => $page, 'nbPages' => $nbPages));
    }

    public function showPromotionsAction()
    {
        $listProducts = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->getPromotionsProducts();
        $title = "Promotions";

        return $this->render('DPCAdminBundle:admin/product:show_products.html.twig', compact('listProducts', 'title'));
    }

    public function showOccasionsAction()
    {
        $listProducts = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->getOccasionsProducts();
        $title = "Occasions";

        return $this->render('DPCAdminBundle:admin/product:show_products.html.twig', compact('listProducts', 'title'));
    }

    public function editAction(Request $request, $id)
    {
        $action = "edit";
        $product = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->find($id);
        $title = "Modifier le produit";
        $form = $this->createForm(ProductType::class, $product);

        $adminAction = new AdminAction();
        $deleteForm = $this->createForm(AdminActionType::class, $adminAction);

        if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Produit modifié');

            return $this->redirectToRoute('dpc_admin_edit_product', array('id' => $product->getId()));
        } 

        if($request->isMethod('POST') &&  $deleteForm->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($product);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Produit supprimé');

            return $this->redirectToRoute('dpc_admin_products', array('id' => $product->getId()));
        } elseif($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', 'Une erreur est survenue');
        }

        return $this->render(
            'DPCAdminBundle:admin/product:admin_product.html.twig', 
            array('form' => $form->createView(), 'deleteForm' => $deleteForm->createView() ,'title' => $title, 'action' => $action, 'product' => $product)
            );
    }

    public function addAction(Request $request){
        $action = "add";
        $product = new Product();
        $title = "Créer un produit";
        $form = $this->createForm(ProductType::class, $product);

        if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Produit enregistré');

            return $this->redirectToRoute('dpc_admin_edit_product', array('id' => $product->getId()));
        }

        return $this->render(
            'DPCAdminBundle:admin/product:admin_product.html.twig', 
            array('form' => $form->createView(), 'title' => $title, 'action' => $action, 'product' => $product)
            );
    }

    private function searchProduct($search, $page){
        $title = null;
        $occasion = null;
        $promo = null;
        $category = null;
        $brand = null;
        
        if(!empty($search->getTitle())){
            $title = $search->getTitle() . '%';
        }
        if($search->getOccasion() == true){
            $occasion = true;
        }
        if($search->getPromo() == true){
            $promo = true;
        }
        if(!empty($search->getcategory())){
            $category = $search->getcategory();
        }
        if(!empty($search->getBrand())){
            $brand = $search->getBrand();
        }

        return $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->search($title, $occasion, $promo, $category, $brand);
    }
}
