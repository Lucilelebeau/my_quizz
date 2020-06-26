<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ScoreController extends AbstractController
{
    /**
     * @Route("/score", name="score")
     */
    public function index()
    {
        return $this->render('score/index.html.twig', [
            'controller_name' => 'ScoreController',
        ]);
    }
}
