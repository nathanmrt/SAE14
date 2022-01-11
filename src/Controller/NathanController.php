<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NathanController extends AbstractController
{
    #[Route('/nathan', name: 'nathan')]
    public function index(): Response
    {
        return $this->render('nathan/index.html.twig', [
            'controller_name' => 'NathanController',
        ]);
    }
}
