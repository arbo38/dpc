<?php

namespace DPC\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DPCStoreBundle:Default:index.html.twig');
    }
}
