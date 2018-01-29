<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\PersonageStats;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;


class PersonageStatsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        for ($i = 1; $i <= 5; $i++) {
            $personageStats = new PersonageStats();
            $personageStats->setHp(5);
            $personageStats->setBonusHp(0);
            $personageStats->setStamina(100);
            $personageStats->setSatiety(100);
            $personageStats->setVision(2);
            $personageStats->setTimeReserve(172800);
            $date = new \dateTime();
            $personageStats->setDateLastAction($date);
            $personageStats->setWeightInventory(0);
            $personageStats->setHeightInventory(0);
            $this->addReference('personageStats'.$i, $personageStats);

            $manager->persist($personageStats);
        }

        $manager->flush();
    }


}
