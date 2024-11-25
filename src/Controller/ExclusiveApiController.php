<?php

namespace App\Controller;

use App\Model\Articulo;
use App\Repository\ArticleRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ExclusiveApiController extends AbstractController
{
    #[Route('/api/articles')]
    public function getCollection(LoggerInterface $logger, ArticleRepository $repository): Response
    {
        $articulos = $repository->findAll();
        return $this->json($articulos);
    }
}