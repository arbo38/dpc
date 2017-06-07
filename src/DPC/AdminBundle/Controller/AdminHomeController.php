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
    	
    	$home = $this->getDoctrine()->getManager()->getRepository('DPCHomeBundle:Home')->getHomeWithSections(1);
        $title = "Page d'accueil DPC";
        $form = $this->createForm(HomeType::class, $home);

        if(!$home)
        {
            $home = new Home();
        }
        
        if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Informations enregistrées');

            return $this->redirectToRoute('dpc_admin_homepage');
        }

        return $this->render(
            'DPCAdminBundle:admin/home:admin_home.html.twig', 
            array('form' => $form->createView(), 'title' => $title, 'home' => $home)
            );
    }
}
