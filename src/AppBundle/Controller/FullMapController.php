<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class FullMapController
 *
 * @Route("fullMap")
 * @package AppBundle\Controller
 */
class FullMapController extends Controller
{
    /**
     * @Route("/", name="fullMap_index")
     */
    public function indexAction(Request $request)
    {
        // Doctrine
        $em = $this->getDoctrine()->getManager();

        // Player
        $player = $em->getRepository('AppBundle:Player')
            ->findOneBy(['firstName' => 'FNom_player1']);

        // Render
        return $this->render('fullMap/fullMap.html.twig', [
            'player' => $player,
        ]);
    }

}
