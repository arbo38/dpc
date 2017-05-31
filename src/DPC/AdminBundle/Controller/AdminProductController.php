<?php

namespace DPC\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use DPC\StoreBundle\Entity\Product;
use DPC\StoreBundle\Form\ProductType;
use DPC\StoreBundle\Entity\Brand;
use DPC\StoreBundle\Form\BrandType;
use DPC\StoreBundle\Entity\Image;
use DPC\StoreBundle\Form\ImageType;
use DPC\AdminBundle\Form\AdminActionType;
use DPC\AdminBundle\Form\CustomFormClass\AdminAction;
// Les use pour formulaire
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

/**
 * @Security("has_role('ROLE_ADMIN')")
 */
class AdminProductController extends Controller
{
    public function showAllAction(){

    }

    public function showPromotionsAction(){
        $listProducts = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->getAllPromos();
        $title = "Promotions";
        return $this->render('DPCAdminBundle:admin/product:show_products.html.twig', compact('listProducts', 'title'));
    }

    public function showOccasionsAction(){
        $listProducts = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->getAllOccasions();
        $title = "Occasions";
        return $this->render('DPCAdminBundle:admin/product:show_products.html.twig', compact('listProducts', 'title'));
    }

    public function showOnlineAction(){
        
    }

    public function editAction(Request $request, $id){
        $product = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->find($id);
        $title = "Modifier le produit";
        $form = $this->createForm(ProductType::class, $product);

        $adminAction = new AdminAction();
        $deleteForm = $this->createForm(AdminActionType::class, $adminAction);
        dump($product);

        if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Produit modifié');

                return $this->redirectToRoute('dpc_admin_edit_product', array('id' => $product->getId()));
        }

        if($request->isMethod('POST') &&  $deleteForm->handleRequest($request)->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->remove($product);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Produit supprimé');

                return $this->redirectToRoute('dpc_admin_homepage', array('id' => $product->getId()));
        }

        return $this->render('DPCAdminBundle:admin/product:admin_product.html.twig', array('form' => $form->createView(), 'deleteForm' => $deleteForm->createView() ,'title' => $title));
    }

    public function addAction(Request $request){
        $product = new Product();
        $title = "Créer un produit";
        $form = $this->createForm(ProductType::class, $product);

        if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($product);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Produit enregistré');

                return $this->redirectToRoute('dpc_admin_edit_product', array('id' => $product->getId()));
        }

        return $this->render('DPCAdminBundle:admin/product:admin_product.html.twig', array('form' => $form->createView(), 'title' => $title));
    }
}
