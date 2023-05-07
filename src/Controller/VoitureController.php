<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Voiture;

class VoitureController extends AbstractController
{
    #[Route('/voiture', name: 'app_voiture')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $productRepository = $entityManager->getRepository(Voiture::class);
        $voitures = $productRepository->findAll();
        


        return $this->render('voiture/index.html.twig', [
            'voitures'=>$voitures,
        ]);
    }
}
