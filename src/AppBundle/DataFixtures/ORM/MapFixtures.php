<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Map;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\DataFixtures\ORM\PersonageFixtures;
use AppBundle\DataFixtures\ORM\MapTypeFixtures;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;


class MapFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        // X
        for ($x = 1; $x <= 12; $x++) {

            // Y
            for ($y = 1; $y <= 12; $y++) {

                $map = new Map();
                $map->setCoordinateX($x);
                $map->setCoordinateY($y);
                $map->setQuality(50);
                $map->setOwner('public');
                $map->setMapType($this->getReference('carte1'));

                if ($x == 11 && $y == 10) {
                    $this->addReference('map', $map);
                }

                $manager->persist($map);
            }
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            MapTypeFixtures::class,
        );
    }
}