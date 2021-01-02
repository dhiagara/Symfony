<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobController extends AbstractController
{
    /**
     * @Route("/job", name="job")
     */
    public function index(): Response
    {
        return $this->render('job/index.html.twig', [
            'controller_name' => 'JobController',
        ]);
    }
 
    /**
     * @Route("/accueil", name="accueil")
     */

    public function accueil()
    {
        return $this->render('job/accueil.html.twig');
    }


     /**
     * @Route("/suppression", name="suppression")
     */
    public function suppression()
    {
        return $this->render('job/suppression.html.twig');
    }

      /**
     * @Route("/ajouter", name="ajouter")
     */
    public function ajouter()
    {
        return $this->render('job/ajouter.html.twig');
    }
}
