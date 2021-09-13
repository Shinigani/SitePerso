<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoiController extends AbstractController
{
    #[Route('/moi', name: 'moi')]
    public function index(): Response
    {
        return $this->render('moi/index.html.twig', [
            'controller_name' => 'MoiController',
            'nom_page' => 'ma page de Présentation',
            'moi' => [
                'isActive' => 'active'
            ],
            'personnage' => [
                'isActive' => ''
            ],
            'projets' => [
                'isActive' => ''
            ],
            'acceuil' => [
                'isActive' => ''
            ],
            'contact' => [
                'isActive' => ''
            ],
        ]);
    }
}
