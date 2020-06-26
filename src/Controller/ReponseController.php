<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ReponseRepository;
use App\Entity\Reponse;

class ReponseController extends AbstractController
{
    /**
     * @Route("/question/{id_question}", name="reponse")
     */
    public function index($id_question)
    {
        $reponses = $this->getDoctrine()->getRepository(Reponse::class)->findBy(['id_question'=>$id_question]);

        return $this->render('reponse/index.html.twig', ['reponses' => $reponses]);
    }
}
