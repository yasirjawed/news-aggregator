<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Interfaces\ArticleRepositoryInterface;
use App\Interfaces\NewsServiceInterface;
use Carbon\Carbon;

class NYTApiService implements NewsServiceInterface
{
    protected string $apiKey;
    protected ArticleRepositoryInterface $repo;

    public function __construct(ArticleRepositoryInterface $repo)
    {
        $this->apiKey = config('services.nyt.key') ?? '';
        $this->repo = $repo;

        if (empty($this->apiKey)) {
            throw new \Exception('Missing NYT_API_KEY in .env or config/services.php');
        }
    }

    public function fetchAndStore(): void
    {
        $url = 'https://api.nytimes.com/svc/news/v3/content/all/all.json';

        $response = Http::get($url, [
            'api-key' => $this->apiKey,
        ]);

        if ($response->successful() && isset($response['results'])) {
            foreach ($response['results'] as $item) {
                $this->repo->storeOrUpdate([
                    'title' => $item['title'],
                    'author' => $item['byline'] ?? null,
                    'description' => $item['abstract'] ?? null,
                    'content' => null,
                    'url' => $item['url'],
                    'url_to_image' => $item['multimedia'][0]['url'] ?? null,
                    'source' => 'New York Times',
                    'category' => $item['section'] ?? null,
                    'published_at' => Carbon::parse($item['published_date']),
                ]);
            }
        }
    }
}