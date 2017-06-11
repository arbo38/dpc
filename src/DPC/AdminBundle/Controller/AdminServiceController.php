<?php

namespace DPC\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use DPC\ServiceBundle\Entity\Service;
use DPC\ServiceBundle\Form\ServiceType;
use DPC\AdminBundle\Form\AdminActionType;
use DPC\AdminBundle\Form\CustomFormClass\AdminAction;

/**
 * @Security("has_role('ROLE_ADMIN')")
 */
class AdminServiceController extends Controller
{
    public function showAllAction()
    {
        $listServices = $this->getDoctrine()->getManager()->getRepository('DPCServiceBundle:Service')->findAllServices();
        $title = "Liste des Services";

        return $this->render('DPCAdminBundle:admin/service:show_services.html.twig', compact('listServices', 'title'));
    }

    public function addAction(Request $request)
    {
    	$service = new Service();
        $form = $this->createForm(ServiceType::class, $service);   
        $title = "Créer un Service";
        $action = 'add';
        if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($service);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Nouveau Service enregistré');

            return $this->redirectToRoute('dpc_admin_services');
        } elseif ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', "Le formulaire contient des erreurs, les changements n'ont pas été enregistrés");
        }

        return $this->render(
            'DPCAdminBundle:admin/service:admin_service.html.twig', 
            array('form' => $form->createView(), 'title' => $title, 'action' => $action, 'service' => $service)
            );
    }

    public function editAction(Request $request, $id)
    {
    	$service = $this->getDoctrine()->getManager()->getRepository('DPCServiceBundle:Service')->findServiceWithImage($id);
        $title = "Modifier un Service";
        $form = $this->createForm(ServiceType::class, $service);
        $adminAction = new AdminAction();
        $deleteForm = $this->createForm(AdminActionType::class, $adminAction);
        $action = 'edit';

        if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($service);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Service modifiée');

            return $this->redirectToRoute('dpc_admin_services');
        }

        if($request->isMethod('POST') &&  $deleteForm->handleRequest($request)->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->remove($service);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Service supprimé');

            return $this->redirectToRoute('dpc_admin_services');
        } elseif ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', "Le formulaire contient des erreurs, les changements n'ont pas été enregistrés");
        }

        return $this->render('DPCAdminBundle:admin/service:admin_service.html.twig', 
            array('form' => $form->createView(), 'deleteForm' => $deleteForm->createView(), 'title' => $title, 'action' => $action, 'service' => $service)
            );
    }
}
