<?php
// src/Controller/AccueilController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function accueil(): Response
    {
        return $this->render('accueil.html.twig', []);
    }
    /**
     * @Route("/Apropos")
     */
    public function Apropos(): Response
    {
        return $this->render('Apropos.html.twig', []);
    }
}