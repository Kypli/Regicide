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
        for ($x = 1; $x <= 8; $x++) {

            // Y
            for ($y = 1; $y <= 8; $y++) {

                $map = new Map();
                $map->setCoordinate([$x, $y]);
                $map->setQuality(50);
                $map->setOwner('public');
                $map->setMapType($this->getReference('carte1'));

                if ($x == 1 && $y == 1) {
                    $map->addPersonages($this->getReference('personage1'));
                }

                $manager->persist($map);
            }
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            PersonageFixtures::class,
            MapTypeFixtures::class,
        );
    }
}