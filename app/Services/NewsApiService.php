<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Interfaces\ArticleRepositoryInterface;
use Carbon\Carbon;

class NewsApiService
{
    protected string $apiKey;
    protected ArticleRepositoryInterface $repo;

    public function __construct(ArticleRepositoryInterface $repo)
    {
        $this->apiKey = config('services.newsapi.key');
        $this->repo = $repo;
    }

    public function fetchAndStore(): void
    {
        $url = 'https://newsapi.org/v2/top-headlines';
        $response = Http::get($url, [
            'language' => 'en',
            'pageSize' => 50,
            'apiKey' => $this->apiKey,
        ]);

        if ($response->successful() && isset($response['articles'])) {
            foreach ($response['articles'] as $article) {
                $this->repo->storeOrUpdate([
                    'title' => $article['title'],
                    'author' => $article['author'],
                    'description' => $article['description'],
                    'content' => $article['content'],
                    'url' => $article['url'],
                    'url_to_image' => $article['urlToImage'],
                    'source' => $article['source']['name'],
                    'category' => null,
                    'published_at' => Carbon::parse($article['publishedAt']),
                ]);
            }
        }
    }
}