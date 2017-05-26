<?php

namespace DPC\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

/**
 * @Security("has_role('ROLE_ADMIN')")
 */
class AdminController extends Controller
{
	
    public function indexAction()
    {
    	// Les utilisateurs :
    	$userManager = $this->get('fos_user.user_manager');
    	$users = $userManager->findUsers();


        return $this->render('DPCAdminBundle:admin:admin_index.html.twig', array('users' => $users,));
    }
}
