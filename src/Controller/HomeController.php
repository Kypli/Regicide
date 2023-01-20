<?php

namespace App\Controller;

use App\Service\Date as DateSer;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/", name="home")
 */
class HomeController extends AbstractController
{
	private $dateSer;

	public function __construct(DateSer $dateSer)
	{
		$this->dateSer = $dateSer;
	}

	/**
	 * @Route("/", name="")
	 */
	public function index(Request $request){

		// User
		$user = $this->getUser();
		$user_id = $user != null ? $user->getId() : 0;

		return $this->render('home/index.html.twig',[

			// Calendrier
			'dateJour' => $this->dateSer->dateToFrench('now', 'l j F Y'),
		]);
	}

	/**
	 * @Route("/todo", name="_todo")
	 */
	public function todo(Request $request){

		return $this->render('todo/index.html.twig');
	}
}
