<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\UserRepository;
use App\Entity\User;
use App\Form\UserType;
use App\Controller\EntityManagerInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/user_edit", name="user_edit")
     */
    public function index(Request $request, User $user)
    {
        $user = new User();
        $form = $this->createForm(UserType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $user->setPassword($this->passwordEncoder->encodePassword($user, $user->getPassword()));

            // Set their role
            $user->setRoles(['ROLE_USER']);

            // Save
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

     /**
     * @Route("/admin_user", name="admin_user")
     */
    public function admin_user()
    {
        $all_user = $this->getDoctrine()->getRepository(User::class)->findAll();
        
        return $this->render('user/admin_user.html.twig', [
            'all_user' => $all_user,
            
        ]);
    }

    /**
     * @Route("/admin_user/{id}/delete", name="admin_user_delete")
     */
    public function admin_user_delete($id)
    {
        $member = $this->getDoctrine()->getRepository(User::class)->findOneBy(['id' => $id]);
        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->remove($member);
        $entityManager->flush();
        
        return $this->render('user/admin_user_delete.html.twig');
    }
}
