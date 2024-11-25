<?php

namespace App\Repository;

use App\Model\Articulo;
use Psr\Log\LoggerInterface;

class ArticleRepository
{
    public function __construct(private  LoggerInterface $logger)
    {

    }
    public function findAll(): array
    {
        $this->logger->info('Esto es la informacion');
        return [
            new Articulo(
                1,
                'Camiseta',
                'Founder',
                'M',
                '1'
            ),
            new Articulo(
                2,
                'Sudadera',
                'Founder',
                'M',
                '1'
            )
        ];
    }
}
