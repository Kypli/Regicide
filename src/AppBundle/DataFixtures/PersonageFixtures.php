<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Personage;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\DataFixtures\LoadSubFamilyFixture;
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
            $personage->setProvince('');

            $manager->persist($personage);
        }

        $manager->flush();
    }


    public function getDependencies()
    {
        return array(
            LoadSubFamilyFixture::class,
        );
    }
}
