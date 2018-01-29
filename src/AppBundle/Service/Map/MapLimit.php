<?php

namespace AppBundle\Service\Map;

use AppBundle\Entity\Player;


class MapLimit
{
    public function limit(Player $player, int $limitMap)
    {
        // Calc half
        $halfX = floor($player->getAreaXmax() / 2);
        $halfY = floor($player->getAreaYmax() / 2);

        // Min & Max
        $minX = $player->getPersonage()->getMap()->getCoordinateX() - $halfX;
        $maxX = $player->getPersonage()->getMap()->getCoordinateX() + $halfX;
        $minY = $player->getPersonage()->getMap()->getCoordinateY() - $halfY;
        $maxY = $player->getPersonage()->getMap()->getCoordinateY() + $halfY;

        // Suppr 0 from Tab
        $minX--;
        $minY--;

        // Odd
        if ($player->getAreaXmax()%2 == 0){
            $minX++;
        }

        if ($player->getAreaYmax()%2 == 0){
            $minY++;
        }

        // ReportX
        if ($minX < 0) {
            $report = abs($minX);
            $minX = 0;
            $maxX+= $report;
        }

        if ($maxX > $limitMap) {
            $report = $maxX - $limitMap;
            $maxX = $limitMap;
            $minX-= $report;
        }

        // ReportY
        if ($minY < 0) {
            $report = abs($minY);
            $minY = 0;
            $maxY+= $report;
        }

        if ($maxY > $limitMap) {
            $report = $maxY - $limitMap;
            $maxY = $limitMap;
            $minY-= $report;
        }

        $mapLimit = [$minX, $maxX, $minY, $maxY];

        return $mapLimit;
    }
}