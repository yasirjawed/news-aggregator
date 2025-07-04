<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Interfaces\NewsServiceInterface;
use App\Interfaces\ArticleRepositoryInterface;
use Carbon\Carbon;

class GuardianApiService implements NewsServiceInterface
{
    protected string $apiKey;
    protected ArticleRepositoryInterface $repo;

    public function __construct(ArticleRepositoryInterface $repo)
    {
        $this->apiKey = config('services.guardian.key') ?? '';
        $this->repo = $repo;

        if (empty($this->apiKey)) {
            throw new \Exception('Missing GUARDIAN_API_KEY in .env or config/services.php');
        }
    }

    public function fetchAndStore(): void
    {
        $url = 'https://content.guardianapis.com/search';

        $response = Http::get($url, [
            'api-key' => $this->apiKey,
            'show-fields' => 'trailText,body,thumbnail',
            'page-size' => 50,
        ]);

        if ($response->successful() && isset($response['response']['results'])) {
            foreach ($response['response']['results'] as $item) {
                $fields = $item['fields'] ?? [];

                $this->repo->storeOrUpdate([
                    'title' => $item['webTitle'],
                    'author' => null,
                    'description' => $fields['trailText'] ?? null,
                    'content' => $fields['body'] ?? null,
                    'url' => $item['webUrl'],
                    'url_to_image' => $fields['thumbnail'] ?? null,
                    'source' => 'The Guardian',
                    'category' => $item['sectionName'] ?? null,
                    'published_at' => Carbon::parse($item['webPublicationDate']),
                ]);
            }
        }
    }
}