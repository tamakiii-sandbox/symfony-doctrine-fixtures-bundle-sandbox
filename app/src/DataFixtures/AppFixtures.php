<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 2; $i++) {
            $user = new User;
            $user->setName("user-${i}");
            $user->setEmail("user-${i}@example.com");
            $manager->persist($user);
        }

        $manager->flush();
    }
}