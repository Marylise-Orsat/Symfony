<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ViewController extends AbstractController
{
    #[Route('/', name: 'vue')]
    public function base(): Response
    {
        
        return $this->render('base.html.twig', [
            
        ]);
    }
}