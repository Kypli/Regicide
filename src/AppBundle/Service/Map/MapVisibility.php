<?php

namespace AppBundle\Service\Map;

use AppBundle\Entity\Player;
use AppBundle\Entity\Map;


class MapVisibility
{
    public function visibility(Player $player, $map)
    {
        // Stats
        $vision = $player->getPersonage()->getPersonageStats()->getVision();
        $visitedMap = $player->getPersonage()->getPersonageStats()->getVisitedMap();
        $visitedMap = explode("|", $visitedMap);

        $personageX = $player->getPersonage()->getMap()->getCoordinateX();
        $personageY = $player->getPersonage()->getMap()->getCoordinateY();

        // Visible ?
        foreach ($map as $mappy) {

            // Coordinate
            $x = $mappy->getCoordinateX();
            $y = $mappy->getCoordinateY();
            $coordinate = $x.",".$y;

            // Distance
            $distanceX = abs($personageX - $x);
            $distanceY = abs($personageY - $y);
            $distance = $distanceX + $distanceY;

            // Visible
            if ($distance <= $vision) {
                $mappy->setVisible(1);

                // Si la tuile n'est pas connue
                if (!in_array($coordinate, $visitedMap)) {
                    $visitedMap[] = $coordinate;
                }

            // Semi-visible
            } elseif (in_array($coordinate, $visitedMap)) {
                $mappy->setVisible(0);

            // Invisible
            } else {
                $mappy->setVisible(2);
            }
        }

        // Enregistre nouvelles tuiles
        $visitedMap = implode("|", $visitedMap);
        $player->getPersonage()->getPersonageStats()->setVisitedMap($visitedMap);

        return $map;
    }
}