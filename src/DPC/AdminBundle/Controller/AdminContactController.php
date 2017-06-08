<?php

namespace DPC\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use DPC\ContactBundle\Entity\CompanyInformation;
use DPC\ContactBundle\Form\CompanyInformationType;

/**
 * @Security("has_role('ROLE_ADMIN')")
 */
class AdminContactController extends Controller
{
    public function contactInfoAction(Request $request)
    {
    	$companyInformation = $this->getDoctrine()->getManager()->getRepository('DPCContactBundle:CompanyInformation')->getContactInformation();
        $title = "Informations de contact DPC";
        
        if($companyInformation === null)
        {
            $companyInformation = new CompanyInformation();
        }

        $form = $this->createForm(CompanyInformationType::class, $companyInformation);

        if($request->isMethod('POST') &&  $form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($companyInformation);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Informations enregistrées');

            return $this->redirectToRoute('dpc_admin_contact');
        }

        return $this->render(
            'DPCAdminBundle:admin/contact:admin_company_information.html.twig', 
            array('form' => $form->createView(), 'title' => $title, 'companyInformation' => $companyInformation)
            );
    }
}
