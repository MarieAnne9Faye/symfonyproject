<?php

namespace App\Controller;

use App\Entity\Users;
use App\Entity\Chambre;
use PhpParser\Builder\Use_;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_bo')]
    public function index(): Response
    {
        return $this->render('back_office/panel.html.twig', [
            'controller_name' => 'MainController',
        ]);
    } 
    
    #[Route('/ajout_chambre', name: 'app_save_room')]
    public function ajout_chambre(EntityManagerInterface $em): Response
    {
        $chambre = new Chambre();
        
        return $this->render('back_office/panel.html.twig', [
            'controller_name' => 'MainController',
        ]);
    } 
}

