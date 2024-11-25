<?php

namespace App\Controller;

use App\Model\Articulo;
use App\Repository\ArticleRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Article;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/articles')]
class ExclusiveApiController extends AbstractController
{
    #[Route('',methods:['GET'])]
    public function getCollection(LoggerInterface $logger, ArticleRepository $repository): Response
    {
        $articulos = $repository->findAll();
        return $this->json($articulos);
    }

    #[Route('/{id<\d+>}',methods:['GET'])]
    public function getOne(int $id, ArticleRepository $repository): Response
    {
        $article = $repository->find($id);

        if(!$article){
            throw $this->createNotFoundException('No se ha encontrado ningún artículo con el id '.$id);
        }
        return $this->json($article);
    }
}