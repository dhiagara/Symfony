<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WatController extends AbstractController
{
    /**
     * @Route("/wat", name="wat")
     */
    public function index(): Response
    {
        return $this->render('wat/index.html.twig', [
            'controller_name' => 'WatController',
        ]);
    }
}
