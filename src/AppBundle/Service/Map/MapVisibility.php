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
        $personageX = $player->getPersonage()->getMap()->getCoordinateX();
        $personageY = $player->getPersonage()->getMap()->getCoordinateY();

        // Visible ?
        foreach ($map as $mappy) {

            // Coordinate
            $x = $mappy->getCoordinateX();
            $y = $mappy->getCoordinateY();

            // Distance
            $distanceX = abs($personageX - $x);
            $distanceY = abs($personageY - $y);
            $distance = $distanceX + $distanceY;

            // true
            if ($distance <= $vision) {
                $mappy->setVisible(1);

            // false
            } else {
                $mappy->setVisible(0);
            }

        }

        return $map;
    }
}