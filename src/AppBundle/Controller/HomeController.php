<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Map;
use AppBundle\Form\MapType;
use AppBundle\Service\Map\MapLimit;
use AppBundle\Service\Map\MapVisibility;
use AppBundle\Service\Personage\ReserveTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class HomeController extends Controller
{
    const LIMITMAP = 12;

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request, ReserveTime $reserveTime)
    {
        // Doctrine
        $em = $this->getDoctrine()->getManager();

        // Player
        $player = $em->getRepository('AppBundle:Player')
            ->findOneBy(['firstName' => 'FNom_player1']);

        // ReserveTime
        $timeFormat = $reserveTime->convertDetail($player->getPersonage()->getPersonageStats()->getTimeReserve());

        // Render
        return $this->render('default/index.html.twig', [
            'player' => $player,
            'timeFormat' => $timeFormat,
        ]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function mapAction(Request $request, MapLimit $mapLimit, MapVisibility $mapVisibility, $fullMap = false)
    {
        // Doctrine
        $em = $this->getDoctrine()->getManager();

        // Player
        $player = $em->getRepository('AppBundle:Player')
            ->findOneBy(['firstName' => 'FNom_player1']);

        // MapLimit
        $mapLimit = $mapLimit->limit($player, self::LIMITMAP, $fullMap);

        // Map
        $map = $em->getRepository('AppBundle:Map')->findType($mapLimit);

        // MapVisibility
        $map = $mapVisibility->visibility($player, $map);

        // Save new Tuile
        $this->getDoctrine()->getManager()->flush();

        // Initialize Form SimpleSearch
        $mapy = new Map();
        $form = $this->createForm(MapType::class, $mapy);
        $form->handleRequest($request);

        // Render
        return $this->render('default/map.html.twig', [
            'player' => $player,
            'mapLimit' => $mapLimit,
            'mapSize' => self::LIMITMAP,
            'map' => $map,
            'form' => $form->createView(),
        ]);
    }
}
