<?php

namespace App\Controller;


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('main/accueil.html.twig', [
        ]);
    } 
    
    #[Route('/chambres', name: 'app_chambre')]
    public function chambre(): Response
    {
        return $this->render('main/chambre.html.twig', [
        ]);
    }

    #[Route('/reservations', name: 'app_reservation')]
    public function reservation(): Response
    {
        return $this->render('main/reservation.html.twig', [
        ]);
    }
}

