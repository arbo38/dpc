<?php

namespace DPC\StoreBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use DPC\StoreBundle\Entity\Product;
use DPC\StoreBundle\Entity\Image;
use Doctrine\ORM\Tools\Pagination\Paginator;

class StoreController extends Controller
{
    private $nbPerPage = 6; // Pagination

    public function productDetailAction($id)
    {
        $product = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->getProductDetail($id);
        $title = "Détail du produit";
        if($product == null)
        {
            throw $this->createNotFoundException("Le produit n'existe pas.");
        }

        return $this->render('DPCStoreBundle:Store/product:show_product.html.twig', compact('product', 'title'));
    }

    public function catalogueAction($page = 1, Request $request)
    {
        if ($page < 1) 
        {
          throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        $title = "Catalogue";
        $listProducts = $this->getDoctrine()
            ->getManager()
            ->getRepository('DPCStoreBundle:Product')
            ->getCatalogueProducts($page, $this->nbPerPage);
        $nbPages = ceil(count($listProducts) / $this->nbPerPage);

        if ($page > $nbPages) 
        {
          throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        return $this->render('DPCStoreBundle:Store/product:list_products.html.twig', array(
            'listProducts' => $listProducts,
            'nbPages'     => $nbPages,
            'page'        => $page,
            'title'       => $title
        ));
  }

    public function promotionsAction($page)
    {
        if ($page < 1) 
        {
          throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        $title = "Promotions";
        $listProducts = $this->getDoctrine()
            ->getManager()
            ->getRepository('DPCStoreBundle:Product')
            ->getPromotionsProducts($page, $this->nbPerPage);
        $nbPages = ceil(count($listProducts) / $this->nbPerPage);

        if ($page > $nbPages) 
        {
          throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        return $this->render('DPCStoreBundle:Store/product:list_products.html.twig', array(
            'listProducts' => $listProducts,
            'nbPages'     => $nbPages,
            'page'        => $page,
            'title'       => $title
        ));
    }

    public function occasionsAction($page)
    {
        if ($page < 1) 
        {
            throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        $title = "Occasions";
        $listProducts = $this->getDoctrine()
            ->getManager()
            ->getRepository('DPCStoreBundle:Product')
            ->getOccasionsProducts($page, $this->nbPerPage);
        $nbPages = ceil(count($listProducts) / $this->nbPerPage);

        if ($page > $nbPages) 
        {
          throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        return $this->render('DPCStoreBundle:Store/product:list_products.html.twig', array(
            'listProducts' => $listProducts,
            'nbPages'     => $nbPages,
            'page'        => $page,
            'title'       => $title
        ));
    }

    // productSelection ne peut être mis en session à cause du composant paginator, en attente de solution
    public function getCurrentSelectionAction(Request $request)
    {
        $productSelection = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->getCurrentSelection(9);
        // $this->globalizeCurrentSelection($productSelection, $request);

        return $this->render('DPCStoreBundle:Store/product:current_selection.html.twig', compact('productSelection'));
    }

    // Secondaires
    public function brandAction($id)
    {
        $brand = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Brand')->find($id);

        return $this->render('DPCStoreBundle:Store:brand.html.twig', compact('brand'));
    }

    // Privées // productSelection ne peut être mis en session à cause du composant paginator, en attente de solution
    /*
    private function globalizeCurrentSelection($productSelection, Request $request)
    {
        $session = $request->getSession();
        $session->set('productSelection', $productSelection);
    }
    */
}
