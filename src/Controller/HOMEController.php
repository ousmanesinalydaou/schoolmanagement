<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HOMEController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        //This is the home page controller
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HOMEController',
        ]);
    }
}
