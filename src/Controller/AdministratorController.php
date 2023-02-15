<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdministratorController extends AbstractController
{
    #[Route('/admin', name: 'app_administrator')]
    public function index(): Response
    {
        return $this->render('administrator/index.html.twig', [
            'controller_name' => 'AdministratorController',
            'page_title' => 'Administrator Panel',
        ]);
    }
    #[Route('/settings', name: 'setting')]
    public function settings()
    {
        return $this->render('administrator/settings.html.twig');
    }
}
