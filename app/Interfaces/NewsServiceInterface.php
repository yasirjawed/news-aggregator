<?php

namespace App\Interfaces;

interface NewsServiceInterface
{
    public function fetchAndStore(): void;
}
