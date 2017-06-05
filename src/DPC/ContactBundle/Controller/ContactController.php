<?php

namespace DPC\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use DPC\ContactBundle\Entity\Contact;
use DPC\ContactBundle\Form\ContactType;

class ContactController extends Controller
{
	public function indexAction(Request $request)
	{
		$contact = new Contact();
		$form = $this->createForm(ContactType::class, $contact);
		if($request->isMethod('POST') && $form->handleRequest($request)->isValid()){

			$acknowledgment = new \Swift_Message('Accusé réception DPC74');
			$acknowledgment->setFrom('dpc74@gmail.com');
			$acknowledgment->setTo($contact->getEmail());
			$acknowledgment->setBody(
				$this->renderView(
					'DPCContactBundle:emails:acknowledgment.html.twig', compact('contact')),
				'text/html'
				);

			if($contact->getMethod()){
				$contactMessage = new \Swift_Message('Demande de rappel');
			} else {
				$contactMessage = new \Swift_Message('Demande de contact');
			}
			$contactMessage->setFrom('dpc74@gmail.com');
			$contactMessage->setTo('beau.antony@gmail.com');
			$contactMessage->setBody(
				$this->renderView(
					'DPCContactBundle:emails:contact.html.twig', compact('contact')),
				'text/html'
				);

			$this->get('mailer')->send($acknowledgment);
			$this->get('mailer')->send($contactMessage);

			$request->getSession()->getFlashBag()->add('notice', 'Message Envoyé, vous recevrez un accusé réception par mail.');
			
			$contact = new Contact();
			$form = $this->createForm(ContactType::class, $contact);

			return $this->render('DPCContactBundle:contact:contact.html.twig', array('form' => $form->createView()));
		}
		return $this->render('DPCContactBundle:contact:contact.html.twig', array('form' => $form->createView()));
	}

	public function logoAction(Request $request){
		$companyInformation = $this->getCompanyInformation();
		$this->globalizeCompanyInformation($companyInformation, $request);
		return $this->render('DPCContactBundle:company_information:logo.html.twig', compact('companyInformation'));
	}

	public function descriptionAction(Request $request){
		$companyInformation = $this->getCompanyInformation();
		$this->globalizeCompanyInformation($companyInformation, $request);
		return $this->render('DPCContactBundle:company_information:description.html.twig', compact('companyInformation'));
	}

	public function contactInfoAction(Request $request){
		$companyInformation = $this->getCompanyInformation();
		$this->globalizeCompanyInformation($companyInformation, $request);
		return $this->render('DPCContactBundle:company_information:contact_info.html.twig', compact('companyInformation'));
	}

	private function globalizeCompanyInformation($companyInformation, Request $request){
		$session = $request->getSession();
		$session->set('companyInformation', $companyInformation);
	}

	private function getCompanyInformation(){
		return $this->getDoctrine()->getManager()->getRepository('DPCContactBundle:CompanyInformation')->find(1);
	}
}
