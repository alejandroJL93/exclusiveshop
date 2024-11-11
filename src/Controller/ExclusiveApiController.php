<?php

namespace App\Controller;

use App\Model\Articulo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ExclusiveApiController extends AbstractController
{
    #[Route('/api/starships')]
    public function getCollection(): Response
    {
        $articulos = [
            [
                new Articulo(
                'Camiseta',
                'Founder',
                'M',
                '1'
                )
            ],
            [
                new Articulo(
                    'Sudadera',
                    'Founder',
                    'M',
                    '1'
                )
            ],
        ];
        return $this->json($articulos);
    }
}