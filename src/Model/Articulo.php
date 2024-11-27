<?php

namespace App\Model;

class Articulo
{
    public function __construct(
        private int $id,
        private string $name,
        private ArticleSizeEnum $size,
        private string $class,
        private ArticleStatusEnum $status,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getStatus(): ArticleSizeEnum
    {
        return $this->status;
    }
    public function getStatusString(): string
    {
        return $this->status->value;
    }
    public function setStatus(): ArticleSizeEnum
    {
        return $this->status;
    }


    public function getClass(): string
    {
        return $this->class;
    }

    public function setClass(string $class): void
    {
        $this->class = $class;
    }

    public function getSize(): ArticleSizeEnum
    {
        return $this->size;
    }

    public function getSizeString(): string
    {
        return $this->size->value;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
