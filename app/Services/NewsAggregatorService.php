<?php

namespace App\Services;

class NewsAggregatorService
{
    private array $services;
    public function __construct(
        NewsApiService $newsApiService,
        NYTApiService $nytApiService,
        GuardianApiService $guardianApiService
    ) {
        $this->services = [
            $newsApiService,
            $nytApiService,
            $guardianApiService,
        ];
    }

    public function fetchAll(): void
    {
        foreach ($this->services as $service) {
            $service->fetchAndStore();
        }
    }
}