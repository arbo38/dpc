<?php

namespace DPC\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServiceController extends Controller
{
    public function indexAction()
    {
    	$listServiceCategories = $this->getDoctrine()->getManager()->getRepository('DPCServiceBundle:ServiceCategory')->findAllServiceCategory();
        $title = "Nos Services";

        return $this->render('DPCServiceBundle:service:service_categories.html.twig', compact('listServiceCategories', 'title'));
    }

    public function showCategoryAction($id)
    {
    	$serviceCategory = $this->getDoctrine()->getManager()->getRepository('DPCServiceBundle:ServiceCategory')->findServiceCategory($id);

        return $this->render('DPCServiceBundle:service:service_category.html.twig', compact('serviceCategory'));
    }

    public function showServiceAction($id)
    {
    	$service = $this->getDoctrine()->getManager()->getRepository('DPCServiceBundle:Service')->findServiceWithImage($id);
        $title = "Nos Services";
        
        return $this->render('DPCServiceBundle:service:service.html.twig', compact('service', 'title'));
    }
}
