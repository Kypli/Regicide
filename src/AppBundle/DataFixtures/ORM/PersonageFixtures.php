<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Personage;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\DataFixtures\ORM\PlayerFixtures;
use AppBundle\DataFixtures\ORM\MapFixtures;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;


class PersonageFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        for ($i = 1; $i <= 5; $i++) {
            $personage = new Personage();
            $personage->setFirstName('FNom_personage'.$i);
            $personage->setLastName('LNom_personage'.$i);
            $personage->setInvention('');
            $personage->setGender('F');
            $personage->setAge(30);
            $personage->setPhoto(0);
            $personage->setReceveiveMail(0);
            $personage->setInsideBuilding(0);
            $personage->setJob('non');
            $personage->setJob2('non');
            $personage->setPlayer($this->getReference('player'.$i));
            if ($i == 1) {
                $personage->setMap($this->getReference('map'));
            }
            $this->addReference('personage'.$i, $personage);

            $manager->persist($personage);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            MapFixtures::class,
            PlayerFixtures::class,
        );
    }
}
