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
    // Principales

    public function productDetailAction($id){
        $product = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->getProductDetail($id);
        if($product == null){
            throw $this->createNotFoundException("Le produit n'existe pas.");
        }
        return $this->render('DPCStoreBundle:Store/product:show_product.html.twig', compact('product'));
    }

    public function catalogueAction($page){
        if ($page < 1) {
          throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        $title = "Catalogue";

        $nbPerPage = 6;

        $listProducts = $this->getDoctrine()
            ->getManager()
            ->getRepository('DPCStoreBundle:Product')
            ->getCatalogueProducts($page, $nbPerPage);


        $nbPages = ceil(count($listProducts) / $nbPerPage);

        if ($page > $nbPages) {
          throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        return $this->render('DPCStoreBundle:Store/product:list_products.html.twig', array(
            'listProducts' => $listProducts,
            'nbPages'     => $nbPages,
            'page'        => $page,
            'title'       => $title
        ));
  }

    public function promotionsAction($page){
        if ($page < 1) {
          throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        $title = "Promotions";

        $nbPerPage = 6;

        $listProducts = $this->getDoctrine()
            ->getManager()
            ->getRepository('DPCStoreBundle:Product')
            ->getPromotionsProducts($page, $nbPerPage);


        $nbPages = ceil(count($listProducts) / $nbPerPage);

        if ($page > $nbPages) {
          throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        return $this->render('DPCStoreBundle:Store/product:list_products.html.twig', array(
            'listProducts' => $listProducts,
            'nbPages'     => $nbPages,
            'page'        => $page,
            'title'       => $title
        ));
    }

    public function occasionsAction($page){
        if ($page < 1) {
            throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        $title = "Occasions";

        $nbPerPage = 6;

        $listProducts = $this->getDoctrine()
            ->getManager()
            ->getRepository('DPCStoreBundle:Product')
            ->getOccasionsProducts($page, $nbPerPage);


        $nbPages = ceil(count($listProducts) / $nbPerPage);

        if ($page > $nbPages) {
          throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        return $this->render('DPCStoreBundle:Store/product:list_products.html.twig', array(
            'listProducts' => $listProducts,
            'nbPages'     => $nbPages,
            'page'        => $page,
            'title'       => $title
        ));

    }

    public function getCurrentSelectionAction(Request $request){
        $productSelection = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Product')->getCurrentSelection();
        $this->globalizeCurrentSelection($productSelection, $request);
        return $this->render('DPCStoreBundle:Store/product:current_selection.html.twig', compact('productSelection'));
    }

    // Secondaires
    public function brandAction($id){
        $brand = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Brand')->find($id);
        return $this->render('DPCStoreBundle:Store:brand.html.twig', compact('brand'));
    }

    // Privées
    private function globalizeCurrentSelection($productSelection, Request $request){
        $session = $request->getSession();
        $session->set('productSelection', $productSelection);
    }
}
