<?php

namespace AppBundle\Service;

use AppBundle\Entity\Map;
use AppBundle\Entity\Player;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Persistence\ObjectManager;


class Move
{
    /**
     * @var ObjectManager
     */
    private $em;

    /**
     * Move constructor.
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function moving(Player $player, $movement)
    {

        // Array movement
        $movement = explode('|', $movement);

        // Get New Map
        $newMap = $this->em
            ->getRepository(Map::class)
            ->findMapbyCoordinate($movement);

        // Relation with Personage
        $player->getPersonage()->setMap($newMap[0]);

        return true;

    }
}