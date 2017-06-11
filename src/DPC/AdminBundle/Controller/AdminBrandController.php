<?php

namespace DPC\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use DPC\StoreBundle\Entity\Brand;
use DPC\StoreBundle\Form\BrandType;
use DPC\StoreBundle\Entity\Image;
use DPC\StoreBundle\Form\ImageType;
use DPC\AdminBundle\Form\AdminActionType;
use DPC\AdminBundle\Form\CustomFormClass\AdminAction;

/**
 * @Security("has_role('ROLE_ADMIN')")
 */
class AdminBrandController extends Controller
{
    public function showAllAction()
    {
        $listBrands = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Brand')->findAllBrands();
        $title = "Liste des marques";

        return $this->render('DPCAdminBundle:admin/brand:show_brands.html.twig', compact('listBrands', 'title'));
    }

    public function addAction(Request $request)
    {
        $action = 'add';
    	$brand = new Brand();
    	$form = $this->createForm(BrandType::class, $brand);   
        $title = "Créer une marque";

    	if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid())
        {
			$em = $this->getDoctrine()->getManager();
			$em->persist($brand);
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Marque enregistré');

			return $this->redirectToRoute('dpc_admin_brands');
    	}

    	return $this->render(
            'DPCAdminBundle:admin/brand:admin_brand.html.twig',
            array('form' => $form->createView(), 'title' => $title, 'action' => $action, 'brand' => $brand)
            );
    }

    public function editAction(Request $request, $id)
    {
        $action = 'edit';
    	$brand = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Brand')->findBrand($id);
        $title = "Modifier la marque";
    	$form = $this->createForm(BrandType::class, $brand);
        $adminAction = new AdminAction();
        $deleteForm = $this->createForm(AdminActionType::class, $adminAction);

    	if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid())
        {
			$em = $this->getDoctrine()->getManager();
			$em->persist($brand);
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Marque enregistré');

			return $this->redirectToRoute('dpc_admin_edit_brand', array('id' => $brand->getId()));
    	}

        if($request->isMethod('POST') &&  $deleteForm->handleRequest($request)->isValid())
        {
                $em = $this->getDoctrine()->getManager();
                $em->remove($brand);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Marque supprimé');

                return $this->redirectToRoute('dpc_admin_brands');
        }

    	return $this->render(
            'DPCAdminBundle:admin/brand:admin_brand.html.twig', 
            array('form' => $form->createView(), 'deleteForm' => $deleteForm->createView(), 'title' => $title, 'brand' => $brand, 'action' => $action)
            );
    }
}
