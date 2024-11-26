<?php

namespace App\Repository;

use App\Model\ArticleSizeEnum;
use App\Model\Articulo;
use Psr\Log\LoggerInterface;

class ArticleRepository
{
    public function __construct(private LoggerInterface $logger)
    {
    }

    public function findAll(): array
    {
        $this->logger->info('Esto es la informacion');

        return [
            new Articulo(
                1,
                'Camiseta Founder 1.0',
                ArticleSizeEnum::L,
                'Founder',
                '1'
            ),
            new Articulo(
                2,
                'Sudadera Founder 1.0',
                ArticleSizeEnum::S,
                'Founder',
                '1'
            ),
        ];
    }

    public function find(int $id): ?Articulo
    {
        foreach ($this->findAll() as $article) {
            if ($article->getId() === $id) {
                return $article;
            }
        }

        return null;
    }
}
