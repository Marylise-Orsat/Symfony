<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class UserController extends AbstractController
{
    #[Route('/user-profile/{id}', name: 'user-profile')]
    public function getUserDetail(int $id): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        
        return $this->render('user/profile.html.twig', [
            'user'=>$user,
            'form' => $this->createForm(UserType::class, new User())->createView()
        ]);
    }
}