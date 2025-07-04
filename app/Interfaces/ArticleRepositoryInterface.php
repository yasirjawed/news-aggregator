<?php

namespace App\Interfaces;

interface ArticleRepositoryInterface
{
    public function filter(array $filters);
    public function find(int $id);
}
