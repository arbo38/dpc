<?php

namespace DPC\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/*
Petit test git

 */

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DPCStoreBundle:Default:index.html.twig');
    }
}
