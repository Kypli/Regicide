<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        // Doctrine
        $em = $this->getDoctrine()->getManager();

        // Player
        $player = $em->getRepository('AppBundle:Map')
            ->findOneBy(['firstName' => 'FNom_player1']);

        var_dump($player);

        // Map
        $map = $em->getRepository('AppBundle:Map')
            ->findBy(['name' => ''], array(), null, 0);

        return $this->render('default/index.html.twig', [
            'player' => $player,
            'map' => $map,
        ]);
    }
}
