<?php

namespace DPC\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
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
class AdminImageController extends Controller
{
    public function showAllAction(){
        $listImages = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Image')->findAll();
        $title = "Liste des images";
        return $this->render('DPCAdminBundle:admin/image:show_images.html.twig', compact('listBrands', 'listImages', 'title'));
    }

    public function addImageAction(Request $request)
    {
    	$image = new Image();

    	$form = $this->createForm(ImageType::class, $image);
        $title = "Créer une image";
    	if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid()){
    			$em = $this->getDoctrine()->getManager();
    			$em->persist($image);
    			$em->flush();

    			$request->getSession()->getFlashBag()->add('notice', 'Image enregistré');

    			return $this->redirectToRoute('dpc_admin_images', array('id' => $image->getId()));
    	}

    	return $this->render('DPCAdminBundle:admin/image:admin_image.html.twig', array('form' => $form->createView(), 'title' => $title));
    }

    public function editImageAction(Request $request, $id)
    {
    	$image = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Image')->find($id);
        $title = "Modifier l'image";
    	$form = $this->createForm(ImageType::class, $image);
        $adminAction = new AdminAction();
        $deleteForm = $this->createForm(AdminActionType::class, $adminAction);
    	if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid()){
    			$em = $this->getDoctrine()->getManager();
    			$em->persist($image);
    			$em->flush();

    			$request->getSession()->getFlashBag()->add('notice', 'Image enregistré');

    			return $this->redirectToRoute('dpc_admin_edit_image', array('id' => $image->getId()));
    	}

        if($request->isMethod('POST') &&  $deleteForm->handleRequest($request)->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->remove($image);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Image supprimé');

                return $this->redirectToRoute('dpc_admin_images', array('id' => $image->getId()));
        }

    	return $this->render('DPCAdminBundle:admin/image:admin_image.html.twig', array('form' => $form->createView(), 'deleteForm' => $deleteForm->createView(), 'title' => $title));
    }
}
