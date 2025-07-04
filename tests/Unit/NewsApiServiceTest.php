<?php
namespace Tests\Unit;

use Tests\TestCase;
use App\Services\NewsApiService;
use Illuminate\Support\Facades\Http;
use App\Interfaces\ArticleRepositoryInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NewsApiServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_news_api_fetch_and_store()
    {
        Http::fake([
            'newsapi.org/*' => Http::response([
                'status' => 'ok',
                'articles' => [
                    [
                        'title' => 'Test',
                        'author' => 'John',
                        'description' => 'Test desc',
                        'content' => 'Full text',
                        'url' => 'https://example.com',
                        'urlToImage' => 'https://image.com/img.jpg',
                        'source' => ['name' => 'NewsAPI'],
                        'publishedAt' => now(),
                    ]
                ]
            ])
        ]);

        $repo = app(ArticleRepositoryInterface::class);
        $service = new NewsApiService($repo);
        $service->fetchAndStore();

        $this->assertDatabaseHas('articles', ['source' => 'NewsAPI']);
    }
}

