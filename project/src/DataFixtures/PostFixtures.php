<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class PostFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $fake = Factory::create('fr-FR');

        for ($i = 0; $i < 150; ++$i) {
            $post = new Post();
            $post->setTitle($fake->sentence(3, true))
                ->setContent($fake->realText(1800))
                ->setState(1 === mt_rand(0, 2) ? Post::STATES[0] : Post::STATES[1]);

            $manager->persist($post);
        }

        $manager->flush();
    }
}