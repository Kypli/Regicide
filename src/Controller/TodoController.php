<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/todo", name="todo")
 */
class TodoController extends AbstractController
{
	/**
	 * @Route("/", name="_index")
	 */
	public function index(Request $request){

		return $this->render('todo/index.html.twig');
	}
}
