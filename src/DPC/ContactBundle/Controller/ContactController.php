<?php

namespace DPC\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use DPC\ContactBundle\Entity\Contact;
use DPC\ContactBundle\Form\ContactType;
use DPC\ContactBundle\Service\DPCContactMailer;

class ContactController extends Controller
{
	public function indexAction(Request $request)
	{
		$contact = new Contact();
		$form = $this->createForm(ContactType::class, $contact);
		if($request->isMethod('POST') && $form->handleRequest($request)->isValid())
		{
			
			$contactMailer = $this->get('contact_mailer');
			$contactMailer->sendMail($request, $contact, true);
			$contact = new Contact();

			$form = $this->createForm(ContactType::class, $contact);

			return $this->render('DPCContactBundle:contact:contact.html.twig', array('form' => $form->createView()));
		}

		return $this->render('DPCContactBundle:contact:contact.html.twig', array('form' => $form->createView()));
	}

	public function logoAction(Request $request)
	{
		$companyInformation = $this->getCompanyInformation();
		$this->globalizeCompanyInformation($companyInformation, $request);

		return $this->render('DPCContactBundle:company_information:logo.html.twig', compact('companyInformation'));
	}

	public function descriptionAction(Request $request)
	{
		$companyInformation = $this->getCompanyInformation();
		$this->globalizeCompanyInformation($companyInformation, $request);

		return $this->render('DPCContactBundle:company_information:description.html.twig', compact('companyInformation'));
	}

	public function contactInfoAction(Request $request)
	{
		$companyInformation = $this->getCompanyInformation();
		$this->globalizeCompanyInformation($companyInformation, $request);

		return $this->render('DPCContactBundle:company_information:contact_info.html.twig', compact('companyInformation'));
	}

	private function globalizeCompanyInformation($companyInformation, Request $request)
	{
		$session = $request->getSession();
		$session->set('companyInformation', $companyInformation);
	}

	private function getCompanyInformation()
	{
		return $this->getDoctrine()->getManager()->getRepository('DPCContactBundle:CompanyInformation')->find(1);
	}
}
