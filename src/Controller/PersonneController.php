<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Personne;
#use App\Form\PersonneType;

class PersonneController extends AbstractController
{
    #[Route('/', name: 'app_personne')]

    public function index(EntityManagerInterface $entityManager): Response
    {
        $productRepository = $entityManager->getRepository(Personne::class);
        $personnes = $productRepository->findAll();
        


        return $this->render('personne/index.html.twig', [
            'personnes'=>$personnes,
        ]);
    }
   
}
