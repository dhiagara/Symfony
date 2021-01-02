<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DddController extends AbstractController
{
    /**
     * @Route("/ddd", name="ddd")
     */
    public function index(): Response
    {
        return $this->render('ddd/index.html.twig', [
            'controller_name' => 'DddController',
        ]);
    }
}
