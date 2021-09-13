<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    #[Route('/personnages', name: 'personnages')]
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig', [
            'controller_name' => 'PersonnageController',
            'nom_page' => 'ma page de Présentation',
            'moi' => [
                'isActive' => ''
            ],
            'personnage' => [
                'isActive' => 'active'
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
