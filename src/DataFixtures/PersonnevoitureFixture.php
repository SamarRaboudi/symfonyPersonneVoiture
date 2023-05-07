<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Personne;
use App\Entity\Voiture;

class PersonnevoitureFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $personne1 = new Personne();
        $personne1->setNom('Ahmed');
        $personne1->setDatenaissance(new \DateTime('1999-05-02 15:30:00'));
        $personne1->setCin('14451142');
        $manager->persist($personne1);


        $personne2 = new Personne();
        $personne2->setNom('salma');
        $personne2->setDatenaissance(new \DateTime('2000-05-02 15:30:00'));
        $personne2->setCin('09451142');
        $manager->persist($personne2);

        $personne3 = new Personne();
        $personne3->setNom('Ali');
        $personne3->setDatenaissance(new \DateTime('1999-06-12 15:30:00'));
        $personne3->setCin('09451142');
        $manager->persist($personne3);


        ///////
        $vot1 = new Voiture();
        $vot1->setNbPorte(4);
        $vot1->setPuissance(500);
        $vot1->setKilometrage('1000km');
        $vot1->setMarque('clio');
        $vot1->setType('A1');
        $vot1->setPersonne($personne1);
        $manager->persist($vot1);

        $vot2 = new Voiture();
        $vot2->setNbPorte(2);
        $vot2->setPuissance(700);
        $vot2->setKilometrage('1000km');
        $vot2->setMarque('polo');
        $vot2->setType('A2');
        $vot2->setPersonne($personne2);
        $manager->persist($vot2);
        
        $manager->flush();
    }
}
