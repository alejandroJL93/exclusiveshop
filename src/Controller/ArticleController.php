<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ArticleController extends AbstractController
{
    #[Route('/articles/{id<\d+>}', name: 'app_article_show')]
    public function show(int $id, ArticleRepository $repository): Response
    {
        $article = $repository->find($id);
        if (!$article) {
            throw $this->CreateNotFoundException('Artículo no encontrado');
        }

        return $this->render(view: 'article/show.html.twig', parameters: [
            'myArticle' => $article,
        ]);
    }
}
