<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(ArticleRepository $Repository): Response
    {
        $articles = $Repository->findAll();
        $articlesCount = count($articles);
        $myArticle  = $articles[array_rand($articles)];

        return $this->render('main/homepage.html.twig', [
            'numberOfArticles' => $articlesCount,
            'myArticle' => $myArticle,
        ]);
    }
}