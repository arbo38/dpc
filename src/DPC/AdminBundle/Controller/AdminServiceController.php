<?php

namespace DPC\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use DPC\ServiceBundle\Entity\Service;
use DPC\ServiceBundle\Form\ServiceType;
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
class AdminServiceController extends Controller
{
    public function showAllAction(){
        $listServices = $this->getDoctrine()->getManager()->getRepository('DPCServiceBundle:Service')->findAll();
        $title = "Liste des Services";
        return $this->render('DPCAdminBundle:admin/service:show_services.html.twig', compact('listServices', 'title'));
    }

    public function addAction(Request $request)
    {
    	$service = new Service();
        $form = $this->createForm(ServiceType::class, $service);   
        $title = "Créer un Service";
        $action = 'add';
        if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($service);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Nouveau Service enregistré');

                return $this->redirectToRoute('dpc_admin_services');
        }

        return $this->render('DPCAdminBundle:admin/service:admin_service.html.twig', array('form' => $form->createView(), 'title' => $title, 'action' => $action));
    }

    public function editAction(Request $request, $id)
    {
    	$service = $this->getDoctrine()->getManager()->getRepository('DPCServiceBundle:Service')->find($id);
        $title = "Modifier un Service";
        $form = $this->createForm(ServiceType::class, $service);
        $adminAction = new AdminAction();
        $deleteForm = $this->createForm(AdminActionType::class, $adminAction);
        $action = 'edit';

        if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid()){
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
        }

        return $this->render('DPCAdminBundle:admin/service:admin_service.html.twig', array('form' => $form->createView(), 'deleteForm' => $deleteForm->createView(), 'title' => $title, 'action' => $action));
    }
}
