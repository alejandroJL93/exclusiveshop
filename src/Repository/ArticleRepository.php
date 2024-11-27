<?php

namespace App\Repository;

use App\Model\ArticleSizeEnum;
use App\Model\ArticleStatusEnum;
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
                ArticleStatusEnum::AVAILABLE
            ),
            new Articulo(
                2,
                'Sudadera Founder 1.0',
                ArticleSizeEnum::S,
                'Founder',
                ArticleStatusEnum::AVAILABLE
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
