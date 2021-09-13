<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'nom_page' => 'de Contact !',
            'moi' => [
                'isActive' => ''
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
                'isActive' => 'active'
            ],
        ]);
    }
}
