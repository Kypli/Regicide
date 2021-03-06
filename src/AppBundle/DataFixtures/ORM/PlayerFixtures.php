<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Player;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;


class PlayerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        for ($i = 1; $i <= 5; $i++) {
            $player = new Player();
            $player->setActive(1);
            $player->setFirstName('FNom_player'.$i);
            $player->setLastName('LNom_player'.$i);
            $player->setSexe('M');
            $player->setMail('test'.$i.'@yahoo.fr');
            $player->setPassword('123');
            $player->setArrangement('nom');
            $player->setArrangementOrder('ASC');
            $player->setAreaXmax(7);
            $player->setAreaYmax(7);
            $this->addReference('player'.$i, $player);

            $manager->persist($player);
        }

        $manager->flush();
    }


}
