<?php

namespace DPC\StoreBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use OC\PlatformBundle\Entity\Advert;

class StoreController extends Controller
{
    public function indexAction()
    {
    	$listPromos = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->getLastPromos();
    	$listOccasions = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->getLastOccasions();

        return $this->render('DPCStoreBundle:Store:accueil.html.twig', compact('listPromos', 'listOccasions'));
    }

    public function promoAction($id)
    {
    	$promo = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->find($id);
        return $this->render('DPCStoreBundle:Store:promo.html.twig', compact('promo'));
    }

    public function promosAction()
    {
    	$listPromos = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->getLastPromos();
        return $this->render('DPCStoreBundle:Store:promos.html.twig', compact('listPromos'));
    }

    public function occasionAction($id)
    {
    	$occasion = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->find($id);

        return $this->render('DPCStoreBundle:Store:occasion.html.twig', compact('occasion'));
    }

    public function occasionsAction()
    {
        $listOccasions = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->getLastOccasions();
        return $this->render('DPCStoreBundle:Store:occasions.html.twig', compact('listOccasions'));
    }

    public function addCategoryToProductAction($product, $category){
    	$em = $this->getDoctrine()->getManager();

    	$product = $em->getRepository('DPCStoreBundle:Product')->find($product);
    	$category = $em->getRepository('DPCStoreBundle:Category')->find($category);

    	$product->addCategory($category);

    	$em->flush();

    	return new Response('Catégorie bien ajouté au produit');

    }

    public function addBrandToProductAction($product, $brand){
    	$em = $this->getDoctrine()->getManager();

    	$product = $em->getRepository('DPCStoreBundle:Product')->find($product);
    	$brand = $em->getRepository('DPCStoreBundle:Brand')->find($brand);

    	$product->setBrand($brand);

    	$em->flush();

    	return new Response('Marque bien ajouté au produit');
    }

    public function addImageToProductAction($product, $image){
    	$em = $this->getDoctrine()->getManager();

    	$product = $em->getRepository('DPCStoreBundle:Product')->find($product);
    	$image = $em->getRepository('DPCStoreBundle:Image')->find($image);

    	$product->addImage($image);

    	$em->flush();

    	return new Response('Image bien ajouté au produit');
    }

    public function removeProductAction($id){
    	$em = $this->getDoctrine()->getManager();

    	$product = $em->getRepository('DPCStoreBundle:Product')->find($id);

    	$em->remove($product);

    	$em->flush();

    	return new Response('Produit supprimé');
    }

    public function testAction(){
    	$em = $this->getDoctrine()->getManager();

    	$brand = $em->getRepository('DPCStoreBundle:Brand')->find(13);

    	$listProducts = $brand->getProducts();

    	dump($listProducts);

    	return $this->render('DPCStoreBundle:Store:test.html.twig', compact('listProducts'));
    }


}
