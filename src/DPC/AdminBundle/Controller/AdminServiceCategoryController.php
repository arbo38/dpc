<?php

namespace DPC\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use DPC\ServiceBundle\Entity\Service;
use DPC\ServiceBundle\Form\ServiceType;
use DPC\ServiceBundle\Entity\ServiceCategory;
use DPC\ServiceBundle\Form\ServiceCategoryType;
use DPC\AdminBundle\Form\AdminActionType;
use DPC\AdminBundle\Form\CustomFormClass\AdminAction;

/**
 * @Security("has_role('ROLE_ADMIN')")
 */
class AdminServiceCategoryController extends Controller
{
    public function showAllAction()
    {
        $listServiceCategories = $this->getDoctrine()->getManager()->getRepository('DPCServiceBundle:ServiceCategory')->findAllServiceCategory();
        $title = "Liste des catégories pour service";

        return $this->render('DPCAdminBundle:admin/service:show_service_categories.html.twig', compact('listServiceCategories', 'title'));
    }

    public function addAction(Request $request)
    {
    	$serviceCategory = new ServiceCategory();
        $form = $this->createForm(ServiceCategoryType::class, $serviceCategory);   
        $title = "Créer une catégorie de service";
        $action = 'add';
        if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($serviceCategory);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Nouvelle Catégorie de Service enregistré');

            return $this->redirectToRoute('dpc_admin_service_categories');
        } elseif ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', "Le formulaire contient des erreurs, les changements n'ont pas été enregistrés");
        }

        return $this->render(
            'DPCAdminBundle:admin/service:admin_service_category.html.twig', 
            array('form' => $form->createView(), 'title' => $title, 'action' => $action, 'serviceCategory' => $serviceCategory)
            );
    }

    public function editAction(Request $request, $id)
    {
    	$serviceCategory = $this->getDoctrine()->getManager()->getRepository('DPCServiceBundle:ServiceCategory')->findServiceCategory($id);
        $title = "Modifier une Catégorie de Service";
        $form = $this->createForm(ServiceCategoryType::class, $serviceCategory);
        $adminAction = new AdminAction();
        $deleteForm = $this->createForm(AdminActionType::class, $adminAction);
        $action = 'edit';

        if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($serviceCategory);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Catégorie de Service modifiée');

            return $this->redirectToRoute('dpc_admin_service_categories');
        }

        if($request->isMethod('POST') &&  $deleteForm->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($serviceCategory);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Catégorie de Service supprimé');

            return $this->redirectToRoute('dpc_admin_service_categories');
        } elseif ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', "Le formulaire contient des erreurs, les changements n'ont pas été enregistrés");
        }

        return $this->render(
            'DPCAdminBundle:admin/service:admin_service_category.html.twig', 
            array('form' => $form->createView(), 'deleteForm' => $deleteForm->createView(), 'title' => $title, 'action' => $action, 'serviceCategory' => $serviceCategory)
            );
    }
}
