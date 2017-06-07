<?php

namespace DPC\ContactBundle\Service;

use Symfony\Component\HttpFoundation\Request;

class ContactMailer{
	private $mailer;
	private $adminMail;
	private $templating;

	public function __construct(\Swift_Mailer $mailer, $adminMail, $templating)
	{
		$this->mailer = $mailer;
		$this->adminMail = $adminMail;
		$this->templating = $templating;
	}

	public function sendMail(Request $request, $contact, $acknowledgment = true)
	{
		if($contact->getMethod())
		{
			$contactMessage = new \Swift_Message('Demande de rappel');
		} else 
		{
			$contactMessage = new \Swift_Message('Demande de contact');
		}
		$contactMessage->setFrom('dpc74000@gmail.com');
		$contactMessage->setTo($this->adminMail);
		$contactMessage->setBody(
			$this->templating->render(
				'DPCContactBundle:emails:contact.html.twig', 
				compact('contact')),
			'text/html'
			);

		$this->mailer->send($contactMessage);

		if($acknowledgment)
		{
			$this->sendAcknowledgment($request, $contact);
		}	
	}

	private function sendAcknowledgment(Request $request, $contact)
	{
		$acknowledgment = new \Swift_Message('Accusé réception DPC74');
		$acknowledgment->setFrom($this->adminMail);
		$acknowledgment->setTo($contact->getEmail());
		$acknowledgment->setBody(
			$this->templating->render(
				'DPCContactBundle:emails:acknowledgment.html.twig', compact('contact')),
			'text/html'
			);

		$this->mailer->send($acknowledgment);

		$request->getSession()->getFlashBag()->add('notice', 'Message Envoyé, vous recevrez un accusé réception par mail.');
	}
}