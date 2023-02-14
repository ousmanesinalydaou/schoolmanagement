<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\Test\test;
use App\Form\Test\TestType;

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

    #[Route('/hometest', name: 'hometest')]
    public function hometest(): Response
    {
        $builder = new test();
        //
        $form = $this->createForm('TestType::class', $builder);
        return $this->render('home/test.html.twig', ['form' => $form,]);
    }
}
