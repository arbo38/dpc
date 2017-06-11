<?php

namespace DPC\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use DPC\HomeBundle\Entity\Home;
use DPC\HomeBundle\Form\HomeType;

/**
 * @Security("has_role('ROLE_ADMIN')")
 */
class AdminHomeController extends Controller
{
    public function homeAction(Request $request)
    {
    	
    	$home = $this->getDoctrine()->getManager()->getRepository('DPCHomeBundle:Home')->getHomeWithSections();
        $title = "Page d'accueil DPC";

        if($home === null)
        {
            $home = new Home();
        }
        $form = $this->createForm(HomeType::class, $home);
        
        if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($home);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Informations enregistrées');

            return $this->redirectToRoute('dpc_admin_homepage');
        } elseif ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', "Le formulaire contient des erreurs, les changements n'ont pas été enregistrés");
        }

        return $this->render(
            'DPCAdminBundle:admin/home:admin_home.html.twig', 
            array('form' => $form->createView(), 'title' => $title, 'home' => $home)
            );
    }
}
