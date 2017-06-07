<?php

namespace DPC\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use DPC\StoreBundle\Entity\Category;
use DPC\StoreBundle\Form\CategoryType;
use DPC\AdminBundle\Form\AdminActionType;
use DPC\AdminBundle\Form\CustomFormClass\AdminAction;

/**
 * @Security("has_role('ROLE_ADMIN')")
 */
class AdminCategoryController extends Controller
{
    public function showAllAction(){
        $listCategories = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Category')->findAllCategories();
        $title = "Liste des catégories";
        return $this->render('DPCAdminBundle:admin/category:show_categories.html.twig', compact('listCategories', 'title'));
    }
    
    public function addAction(Request $request)
    {
        $action = "add";
    	$category = new Category();
    	$form = $this->createForm(CategoryType::class, $category);   
        $title = "Créer une catégorie";
    	if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid())
        {
			$em = $this->getDoctrine()->getManager();
			$em->persist($category);
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Catégorie enregistré');

			return $this->redirectToRoute('dpc_admin_categories');
    	}

    	return $this->render(
            'DPCAdminBundle:admin/category:admin_category.html.twig',
            array('form' => $form->createView(), 'title' => $title, 'action' => $action, 'category' => $category)
            );
    }

    public function editAction(Request $request, $id)
    {
        $action = "edit";
    	$category = $this->getDoctrine()->getManager()->getRepository('DPCStoreBundle:Category')->findCategory($id);
        $title = "Modifier la catégorie";
    	$form = $this->createForm(CategoryType::class, $category);
        $adminAction = new AdminAction();
        $deleteForm = $this->createForm(AdminActionType::class, $adminAction);

    	if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid())
        {
			$em = $this->getDoctrine()->getManager();
			$em->persist($category);
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Catégorie enregistré');

			return $this->redirectToRoute('dpc_admin_edit_category', array('id' => $category->getId()));
    	}

        if($request->isMethod('POST') &&  $deleteForm->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($category);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Marque supprimé');

            return $this->redirectToRoute('dpc_admin_categories');
        }

    	return $this->render(
            'DPCAdminBundle:admin/category:admin_category.html.twig', 
            array('form' => $form->createView(), 'deleteForm' => $deleteForm->createView(), 'title' => $title, 'category' => $category, 'action' => $action)
            );
    }
}
