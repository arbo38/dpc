<?php

namespace DPC\FAQBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FAQController extends Controller
{
    public function indexAction()
    {
    	$listFaqThemes = $this->getDoctrine()->getManager()->getRepository('DPCFAQBundle:FaqTheme')->getPublished();
    	dump($listFaqThemes);
        return $this->render('DPCFAQBundle:FAQ:faq.html.twig', compact('listFaqThemes'));
    }
}
