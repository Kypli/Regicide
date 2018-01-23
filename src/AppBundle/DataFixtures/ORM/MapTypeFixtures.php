<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\MapType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class MapTypeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Initialisation
        $level = 0;

        // Name
        $names = [
            'terre',
            'gazon',
            'herbe haute',
            'plaine',
            'boue',
            'marais',
            'marécage',
            'mangrove',
            'caillouteux',
            'rocailleux',
            'pierreux',
            'rocheux',
            'sableux',
            'plage',
            'plage',
            'rivage',
            'océan',
            'océan',
            'océan',
            'océan',
            'floconneux',
            'neige',
            'gelé',
            'glacier',
            'sable',
            'désert',
            'désert',
            'désert aride',
        ];

        // Types
        $types = [
            'herbe',
            'marécages',
            'roche',
            'plage',
            'océan',
            'neige',
            'désert',
        ];

        // Création
        for ($i = 0; $i < 28; $i++) {

            $ii = $i + 1;
            $ii = ceil($ii / 4);
            $ii--;

            // Set
            $mapType = new MapType();
            $mapType->setName($names[$i]);
            $mapType->setType($types[$ii]);
            $mapType->setLevel($level);
            $mapType->setSpeedConstruction(15 - (3 * $level));
            $level = $this->addLevel($level);
            $mapType->setVisibility(1);
            $mapType->setWear(-1);
            $mapType->setFoodWear(4);
            $mapType->setWoodWear(2);
            $mapType->setOreWear(2);
            $mapType->setVegetableWear(3);
            $mapType->setAnimalWear(3);

            // Reference
            if ($i == 1) {
                $this->addReference('carte1', $mapType);
            }

            $manager->persist($mapType);

        }

        $manager->flush();
    }

    public function addLevel(int $level) : int
    {
        if ($level < 3) {
            $level++;
        } else {
            $level = 0;
        }

        return $level;
    }
}