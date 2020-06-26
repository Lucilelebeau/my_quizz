<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request; 
use App\Entity\Categorie;
use App\Entity\Question;
use App\Entity\Score;
use App\Repository\QuestionRepository;
use App\Repository\ScoreRepository;
use Symfony\Component\HttpFoundation\Session\Session;

class CategorieController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request)
    {
        $categories = $this->getDoctrine()->getRepository(Categorie::class)->findAll();
        $questions = $this->getDoctrine()->getRepository(Question::class)->findAll();

        if($this->getUser() == null){
            $session = $request->getSession();
            //echo $session->get('id_cat');
            //echo $session->get('scores');
            $id_cat = $session->get('id_cat');
            $score = $session->get('scores');

            return $this->render('categorie/index.html.twig', [
                'categories' => $categories,
                'score' => $score,
                'id_cat' => $id_cat,
            ]);
        }
        else{
            $id_user = $this->getUser()->getId();
            $scoreData = $this->getDoctrine()->getRepository(Score::class)->findBy(['id_user' => $id_user]);
            $session = $request->getSession();
            $id_cat = $session->get('id_cat');
            $score = $session->get('scores');

            return $this->render('categorie/index.html.twig', [
                'categories' => $categories,
                'score' => $score,
                'id_cat' => $id_cat,
                'scoreData' => $scoreData,
            ]);
    
        }
        
    }

}
