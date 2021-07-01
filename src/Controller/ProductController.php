<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ProductController extends AbstractController
{
    #[Route('/detail-product', name: 'detail-product')]
    public function product(): Response
    {
        return $this->render('product/detail.html.twig', [
            "id" => "1",
            "name" => "Produit 1",
            "price" => "12.99",
            "stock" => "80",
            "description" => "Description détaillée du produit"
        ]);
    }
}