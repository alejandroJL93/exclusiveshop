<?php

namespace App\Model;

class Articulo
{
    public function __construct(
        private int $id,
        private string $name,
        private string $size,
        private string $class,
        private string $status,

    ){

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
    public function getClass(): string
    {
        return $this->class;
    }
    public function setClass(string $class): void
    {
        $this->class = $class;
    }
    public function getSize(): string
    {
        return $this->size;
    }
    public function setSize(string $size): void
    {
        $this->size = $size;
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