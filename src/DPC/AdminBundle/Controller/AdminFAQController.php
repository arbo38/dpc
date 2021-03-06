<?php

namespace DPC\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use DPC\FAQBundle\Entity\Faq;
use DPC\FAQBundle\Form\FaqType;
use DPC\FAQBundle\Entity\FaqTheme;
use DPC\FAQBundle\Form\FaqThemeType;
use DPC\AdminBundle\Form\AdminActionType;
use DPC\AdminBundle\Form\CustomFormClass\AdminAction;

/**
 * @Security("has_role('ROLE_ADMIN')")
 */
class AdminFAQController extends Controller
{
    public function showAllAction()
    {
        $listFaqs = $this->getDoctrine()->getManager()->getRepository('DPCFAQBundle:Faq')->findAllFAQS();
        $title = "Liste des Faqs";

        return $this->render('DPCAdminBundle:admin/faq:show_faqs.html.twig', compact('listFaqs', 'title'));
    }

    public function addAction(Request $request)
    {
    	$faq = new Faq();
        $form = $this->createForm(FaqType::class, $faq);   
        $title = "Créer une FAQ";
        $action = 'add';

        if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($faq);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Nouvelle FAQ enregistré');

            return $this->redirectToRoute('dpc_admin_faqs');
        } elseif ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', "Le formulaire contient des erreurs, les changements n'ont pas été enregistrés");
        }

        return $this->render('DPCAdminBundle:admin/faq:admin_faq.html.twig', 
            array('form' => $form->createView(), 'title' => $title, 'action' => $action, 'faq' => $faq)
            );
    }

    public function editAction(Request $request, $id)
    {
    	$faq = $this->getDoctrine()->getManager()->getRepository('DPCFAQBundle:Faq')->findFAQ($id);
        $title = "Modifier une FAQ";
        $form = $this->createForm(FaqType::class, $faq);
        $adminAction = new AdminAction();
        $deleteForm = $this->createForm(AdminActionType::class, $adminAction);
        $action = 'edit';

        if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($faq);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'FAQ modifiée');

            return $this->redirectToRoute('dpc_admin_faqs');
        }

        if($request->isMethod('POST') &&  $deleteForm->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($faq);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'FAQ supprimé');

            return $this->redirectToRoute('dpc_admin_faqs');
        } elseif ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', "Le formulaire contient des erreurs, les changements n'ont pas été enregistrés");
        }

        return $this->render('DPCAdminBundle:admin/faq:admin_faq.html.twig', 
            array('form' => $form->createView(), 'deleteForm' => $deleteForm->createView(), 'title' => $title, 'action' => $action)
            );
    }

    public function showThemesAction()
    {
        $listThemes = $this->getDoctrine()->getManager()->getRepository('DPCFAQBundle:FaqTheme')->getPublished();
        $title = "Liste des Thèmes FAQ";

        return $this->render('DPCAdminBundle:admin/faq:show_faq_themes.html.twig', compact('listThemes', 'title'));
    }

    public function addThemeAction(Request $request)
    {
        $theme = new FaqTheme();
        $form = $this->createForm(FaqThemeType::class, $theme);   
        $title = "Créer un Thème FAQ";
        $action = 'add';

        if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($theme);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Thème FAQ enregistré');

            return $this->redirectToRoute('dpc_admin_faq_themes');
        } elseif ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', "Le formulaire contient des erreurs, les changements n'ont pas été enregistrés");
        }

        return $this->render('DPCAdminBundle:admin/faq:admin_faq_theme.html.twig', 
            array('form' => $form->createView(), 'title' => $title, 'action' => $action)
            );
    }

    public function editThemeAction(Request $request, $id)
    {
        $theme = $this->getDoctrine()->getManager()->getRepository('DPCFAQBundle:FaqTheme')->find($id);
        $title = "Modifier le Thème FAQ";
        $form = $this->createForm(FaqThemeType::class, $theme);
        $adminAction = new AdminAction();
        $deleteForm = $this->createForm(AdminActionType::class, $adminAction);
        $action = 'edit';

        if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($theme);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Thème FAQ enregistré');

            return $this->redirectToRoute('dpc_admin_faq_themes');
        }

        if($request->isMethod('POST') &&  $deleteForm->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($theme);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Thème FAQ supprimé');

            return $this->redirectToRoute('dpc_admin_faq_themes');
        } elseif ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', "Le formulaire contient des erreurs, les changements n'ont pas été enregistrés");
        }

        return $this->render('DPCAdminBundle:admin/faq:admin_faq_theme.html.twig', 
            array('form' => $form->createView(), 'deleteForm' => $deleteForm->createView(), 'title' => $title, 'action' => $action, 'theme' => $theme)
            );
    }
}
