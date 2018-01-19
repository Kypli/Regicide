<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Player;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PlayerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        for ($i = 1; $i <= 5; $i++) {
            $player = new Player();
            $player->setFirstName('FNom_player'.$i);
            $player->setLastName('LNom_player'.$i);
            $player->setMail('test'.$i.'@yahoo.fr');
            $player->setPassword('123');
            $player->setAreaXmax(6);
            $player->setAreaYmax(6);
            $player->setArrangement('nom');
            $player->setArrangementOrder('ASC');
            $player->setActive(1);
            $manager->persist($player);
        }

        $manager->flush();
    }
}
