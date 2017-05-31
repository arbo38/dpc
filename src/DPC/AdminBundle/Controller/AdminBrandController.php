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
class AdminBrandController extends Controller
{
    public function showAllAction(){
        $listBrands = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Brand')->findAll();
        $title = "Liste des marques";
        return $this->render('DPCAdminBundle:admin/brand:show_brands.html.twig', compact('listBrands', 'title'));
    }

    public function addAction(Request $request)
    {
    	$brand = new Brand();
    	$form = $this->createForm(BrandType::class, $brand);   
        $title = "Créer une marque";
    	if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid()){
    			$em = $this->getDoctrine()->getManager();
    			$em->persist($brand);
    			$em->flush();

    			$request->getSession()->getFlashBag()->add('notice', 'Marque enregistré');

    			return $this->redirectToRoute('dpc_admin_brands');
    	}

    	return $this->render('DPCAdminBundle:admin/brand:admin_brand.html.twig', array('form' => $form->createView(), 'title' => $title));
    }

    public function editAction(Request $request, $id)
    {
    	$brand = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Brand')->find($id);
        $title = "Modifier la marque";
    	$form = $this->createForm(BrandType::class, $brand);
        $adminAction = new AdminAction();
        $deleteForm = $this->createForm(AdminActionType::class, $adminAction);

    	if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid()){
    			$em = $this->getDoctrine()->getManager();
    			$em->persist($brand);
    			$em->flush();

    			$request->getSession()->getFlashBag()->add('notice', 'Marque enregistré');

    			return $this->redirectToRoute('dpc_admin_edit_brand', array('id' => $brand->getId()));
    	}

        if($request->isMethod('POST') &&  $deleteForm->handleRequest($request)->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->remove($brand);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Marque supprimé');

                return $this->redirectToRoute('dpc_admin_brands', array('id' => $brand->getId()));
        }

    	return $this->render('DPCAdminBundle:admin/brand:admin_brand.html.twig', array('form' => $form->createView(), 'deleteForm' => $deleteForm->createView(), 'title' => $title));
    }
}