<?php

namespace DPC\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function homeAction()
    {
    	$home = $this->getDoctrine()->getManager()->getRepository('DPCHomeBundle:Home')->getHomeWithSections(1);
    	if($home == null){
    		return $this->render('::under_construction.html.twig');
    	}
        return $this->render('DPCHomeBundle::home.html.twig', compact('home'));
    }
}
