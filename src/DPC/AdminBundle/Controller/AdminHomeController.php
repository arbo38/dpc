<?php

namespace DPC\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use DPC\HomeBundle\Entity\Home;
use DPC\HomeBundle\Form\HomeType;



class AdminHomeController extends Controller
{
    public function homeAction(Request $request)
    {
    	
    	$home = $this->getDoctrine()->getManager()->getRepository('DPCHomeBundle:Home')->find(1);
        if(!$home){
            $home = new Home();
        }
        $title = "Page d'accueil DPC";
        $form = $this->createForm(HomeType::class, $home);

        if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Informations enregistrées');

                return $this->redirectToRoute('dpc_admin_homepage');
        }

        return $this->render('DPCAdminBundle:admin/home:admin_home.html.twig', array('form' => $form->createView(), 'title' => $title, 'home' => $home));
    }
}
