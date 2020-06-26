<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\QuestionRepository;
use App\Repository\CategorieRepository;
//use App\Repository\UserRepository;
use App\Entity\Categorie;
use App\Entity\Question;
use App\Entity\Reponse;
//use App\Entity\User;
use App\Entity\Score;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class QuestionController extends AbstractController
{
    /**
     * @Route("/categorie/{id}/{id_question}/{score}", name="categorieId")
     */
    public function index($id, $id_question, $score, Request $request, PaginatorInterface $paginator)
    {
        $categories = $this->getDoctrine()->getRepository(Categorie::class)->findOneBy(['id'=>$id]);

        if($id_question == "start"){
            $q = $this->getDoctrine()->getRepository(Question::class)->findOneBy(['id_categorie'=>$id]);
            $id_question = $q->getId();
        }
        $questions = $this->getDoctrine()->getRepository(Question::class)->findOneBy(['id_categorie'=>$id, 'id' => $id_question]);
        /*$questions = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            10 // Nombre de résultats par page
        );*/

        $reponses = $this->getDoctrine()->getRepository(Reponse::class)->findBy(['id_question' => $questions->getId()]);
        $expected = $this->getDoctrine()->getRepository(Reponse::class)->findOneBy(['id_question' => $questions, 'reponse_expected' => 1]);
        $validate = $request->query->get('reponse');

        $cat = $questions->getIdCategorie();

        // id prochaine question
        $nextQuest = $questions->getId();
        $nextQuest++;

        // bonne réponse
        if($validate == $expected->getreponse_expected()){
            $score++;
        }
        
        //fin du questionnaire + score
        $q = $this->getDoctrine()->getRepository(Question::class)->findOneBy(['id_categorie'=>$id]);
        $nbr = $q->getId();
        
        // id last question du quizz
        $last = $nbr +9;

        
        return $this->render('question/index.html.twig', [
            'questions' => $questions,
            'categories' => $categories,
            'reponses' => $reponses,
            'expected' => $expected,
            'request' => $request,
            'validate' => $validate,
            'cat' => $cat,
            'nbr' => $nbr,
            'nextQuest' => $nextQuest,
            'score' => $score,
            'last' => $last
        ]);
    }

    /**
     * @Route("/categorie/{id}/{score}", name="resultat")
     */
    public function getScore($id, $score, Request $request) : Response
    {
        $categories = $this->getDoctrine()->getRepository(Categorie::class)->findOneBy(['id'=>$id]);
        
        $scores = $score;
        $id_categorie = $categories->getId();
        $date = date("Y-m-d H:i:s");
        
        if($this->getUser() == null){
            $session = new Session();
            $session->start();
            $session = $request->getSession();
            $session->set('scores', $scores);
            $session->set('id_cat', $id_categorie);
        }
        else{
            $id_user = $this->getUser()->getId();

            $entityManager = $this->getDoctrine()->getManager();
        
            $add_score = new Score();
            $add_score->setIdUser($id_user);
            $add_score->setIdCategorie($id_categorie);
            $add_score->setScore($scores);
            $add_score->setDate($date);

            $entityManager->persist($add_score);
            $entityManager->flush();
        }
            
        
        return $this->render('categorie/resultat.html.twig', [
            'categories' => $categories,
            'scores' => $scores,
        ]);
    }
}
