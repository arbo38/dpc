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
class AdminController extends Controller
{
	/*
    public function indexAction()
    {
    	// Les utilisateurs :
    	$userManager = $this->get('fos_user.user_manager');
    	$users = $userManager->findUsers();


        return $this->render('DPCAdminBundle:admin:admin_index.html.twig', array('users' => $users,));
    }*/

    public function productAction(Request $request)
    {
    	$product = new Product();

    	$form = $this->createForm(ProductType::class, $product);

    	if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid()){
    			$em = $this->getDoctrine()->getManager();
    			$em->persist($product);
    			$em->flush();

    			$request->getSession()->getFlashBag()->add('notice', 'Produit enregistré');

    			return $this->redirectToRoute('dpc_store_product', array('id' => $product->getId()));
    	}

    	return $this->render('DPCAdminBundle:admin:admin_product.html.twig', array('form' => $form->createView()));
    }

    public function addBrandAction(Request $request)
    {
    	$brand = new Brand();

    	$form = $this->createForm(BrandType::class, $brand);

    	if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid()){
    			$em = $this->getDoctrine()->getManager();
    			$em->persist($brand);
    			$em->flush();

    			$request->getSession()->getFlashBag()->add('notice', 'Marque enregistré');

    			return $this->redirectToRoute('dpc_store_brand', array('id' => $brand->getId()));
    	}

    	return $this->render('DPCAdminBundle:admin/brand:admin_brand.html.twig', array('form' => $form->createView()));
    }

    public function editBrandAction(Request $request, $id)
    {
    	$brand = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Brand')->find($id);

    	$form = $this->createForm(BrandType::class, $brand);

    	if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid()){
    			$em = $this->getDoctrine()->getManager();
    			$em->persist($brand);
    			$em->flush();

    			$request->getSession()->getFlashBag()->add('notice', 'Marque enregistré');

    			return $this->redirectToRoute('dpc_store_brand', array('id' => $brand->getId()));
    	}

    	return $this->render('DPCAdminBundle:admin/brand:admin_brand.html.twig', array('form' => $form->createView()));
    }

    public function addImageAction(Request $request)
    {
    	$image = new Image();

    	$form = $this->createForm(ImageType::class, $image);

    	if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid()){
    			$em = $this->getDoctrine()->getManager();
    			$em->persist($image);
    			$em->flush();

    			$request->getSession()->getFlashBag()->add('notice', 'Image enregistré');

    			return $this->redirectToRoute('dpc_store_image', array('id' => $image->getId()));
    	}

    	return $this->render('DPCAdminBundle:admin:admin_image.html.twig', array('form' => $form->createView()));
    }

    public function editImageAction(Request $request, $id)
    {
    	$image = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Image')->find($id);

    	$form = $this->createForm(ImageType::class, $image);

    	if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid()){
    			$em = $this->getDoctrine()->getManager();
    			$em->persist($image);
    			$em->flush();

    			$request->getSession()->getFlashBag()->add('notice', 'Image enregistré');

    			return $this->redirectToRoute('dpc_store_image', array('id' => $image->getId()));
    	}

    	return $this->render('DPCAdminBundle:admin:admin_image.html.twig', array('form' => $form->createView()));
    }
}
