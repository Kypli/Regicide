<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Player;
use AppBundle\Entity\Map;
use AppBundle\Service\Order\Move;
use AppBundle\Service\Map\MapLimit;
use AppBundle\Service\Map\MapVisibility;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    const LIMITMAP = 12;

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // Doctrine
        $em = $this->getDoctrine()->getManager();

        // Player
        $player = $em->getRepository('AppBundle:Player')
            ->findOneBy(['firstName' => 'FNom_player1']);

        // Render
        return $this->render('default/index.html.twig', [
            'player' => $player,
        ]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function mapAction(MapLimit $mapLimit,  MapVisibility $mapVisibility)
    {
        // Doctrine
        $em = $this->getDoctrine()->getManager();

        // Player
        $player = $em->getRepository('AppBundle:Player')
            ->findOneBy(['firstName' => 'FNom_player1']);

        // MapLimit
        $mapLimit = $mapLimit->limit($player, self::LIMITMAP);

        // Map
        $map = $em->getRepository('AppBundle:Map')->findType($mapLimit);

        // MapVisibility
        $map = $mapVisibility->visibility($player, $map);

        // Render
        return $this->render('default/map.html.twig', [
            'player' => $player,
            'mapLimit' => $mapLimit,
            'mapSize' => self::LIMITMAP,
            'map' => $map,
        ]);
    }
}
