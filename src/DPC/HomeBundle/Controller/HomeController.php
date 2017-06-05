<?php

namespace DPC\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function homeAction()
    {
    	$home = $this->getDoctrine()->getManager()->getRepository('DPCHomeBundle:Home')->find(1);
        return $this->render('DPCHomeBundle::home.html.twig', compact('home'));
    }
}
