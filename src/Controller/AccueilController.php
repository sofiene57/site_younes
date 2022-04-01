<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AccueilController extends AbstractController
{
    #[Route('/accueil', name: 'accueil')]
    public function accueil(): Response
    {
        return $this->render('pages/accueil.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    #[Route('/notre_equipe', name: 'equipe')]
    public function coach(): Response
    {
        return $this->render('pages/notre_equipe.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    #[Route('/services', name: 'services')]
    public function services(): Response
    {
        return $this->render('pages/services.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('pages/contact.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
}