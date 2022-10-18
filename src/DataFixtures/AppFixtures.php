<?php

namespace App\DataFixtures;

use App\Entity\MicroPost;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $microPost1 = new MicroPost();
        $microPost1->setTitle('welcome to Morocco!');
        $microPost1->setTekst('Hello world of Morocco!');
        $microPost1->setCreated(new DateTime());
        $manager->persist($microPost1);


        $microPost2 = new MicroPost();
        $microPost2->setTitle('welcome to Belgium!');
        $microPost2->setTekst('Hello world of Belgium!');
        $microPost2->setCreated(new DateTime());
        $manager->persist($microPost2);


        $microPost3 = new MicroPost();
        $microPost3->setTitle('welcome to Japan!');
        $microPost3->setTekst('Hello world of Japan!');
        $microPost3->setCreated(new DateTime());
        $manager->persist($microPost3);


        $manager->flush();
    }
}
