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
		$temp = 123;
		$array = [1, 2, 3];
		$bool = false;
		return $this->render('default/index.html.twig', ['temp' => $temp, 'array' => $array, 'bool' => $bool]);
	}

	/**
	 * @Route("/feedback", name="feedback")
	 */
	public function feedbackAction()
	{
		//обезательно use Symfony\Component\HttpFoundation\Response;
		return $this->render('default/feedback.html.twig');
	}

}
