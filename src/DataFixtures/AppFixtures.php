<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 7; $i++) {
            $user = new User();
            $user->setUsername('userName '.$i);
            $user->setEmail("userEmail@email.com".$i);
            $manager->persist($user);
        }

        $manager->flush();
    }
}
