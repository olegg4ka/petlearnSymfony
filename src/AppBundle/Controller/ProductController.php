<?php


namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
	/**
	 * @Route("/products", name="products")
	 * @Template()
	 * Template - путь для view
	 */
	public function indexAction(){
		$products = [];
		for ($i = 1; $i <= 10; $i++){
			$products[] = rand(1,100);
		}
//		return $this->render('@App/product/index.html.twig', ['products' => $products]);
		return ['products' => $products];
	}

	/**
	 * {id} - маска сифача
	 * $id || Request $request - получение айди с шаблона, который в роуте
	 * ******************************************************************************************
	 * @Route("/products/{id}", name="product_item", requirements={"id": "[0-9]+"})
	 * @Template()
	 * ******************************************************************************************
	 * @param $id
	 * @return \Symfony\Component\HttpFoundation\Response|null
	 */
	public function showAction($id){
		return  ['id' => $id];
//		return $this->render('@App/product/show.html.twig', ['id' => $id]);
	}
//	public function showAction(Request $request){
//		dump($request->get('id'));
//		die('aaaa');
//	}


}