<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
	/**
	 * @Route("/", name="homepage")
	 */
	public function indexAction(Request $request)
	{
		return $this->render('@App/default/index.html.twig');
	}

	/**
	 * @Route("/feedback", name="feedback")
	 */
	public function feedbackAction()
	{
		//обезательно use Symfony\Component\HttpFoundation\Response;
		return $this->render('@App/default/feedback.html.twig');
	}

}
