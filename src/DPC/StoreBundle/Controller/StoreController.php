<?php

namespace DPC\StoreBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use DPC\StoreBundle\Entity\Product;
use DPC\StoreBundle\Entity\Image;

class StoreController extends Controller
{
    public function indexAction()
    {
    	$listPromos = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->getLastPromos();
    	$listOccasions = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->getLastOccasions();

        return $this->render('DPCStoreBundle:Store:accueil.html.twig', compact('listPromos', 'listOccasions'));
    }

    public function productAction($id)
    {
        $product = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->find($id);
        return $this->render('DPCStoreBundle:Store/product:show_product.html.twig', compact('product'));
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
    	$product = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->find($id);

        return $this->render('DPCStoreBundle:Store/product:show_product.html.twig', compact('product'));
    }

    public function occasionsAction()
    {
        $listProducts = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->getLastOccasions();
        $title = "Nos occasions";
        return $this->render('DPCStoreBundle:Store/product:list_products.html.twig', compact('listProducts', 'title'));
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
    	
    	return $this->render('::dpc_base_layout.html.twig');
    }

    public function brandAction($id)
    {
        $brand = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Brand')->find($id);
        return $this->render('DPCStoreBundle:Store:brand.html.twig', compact('brand'));
    }

    public function imageAction($id)
    {
        $image = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Image')->find($id);
        return $this->render('DPCStoreBundle:Store:image.html.twig', compact('image'));
    }


}
