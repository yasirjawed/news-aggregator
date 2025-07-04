<?php
namespace Tests\Unit;

use Tests\TestCase;
use App\Services\NYTApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Interfaces\ArticleRepositoryInterface;

class NYTApiServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_nyt_api_fetch_and_store()
    {
        Http::fake([
            'api.nytimes.com/*' => Http::response([
                'status' => 'OK',
                'results' => [
                    [
                        'title' => 'NYT Title',
                        'byline' => 'NYT Author',
                        'abstract' => 'NYT Abstract',
                        'url' => 'https://nytimes.com/example',
                        'multimedia' => [['url' => 'https://image.nyt.com/image.jpg']],
                        'section' => 'World',
                        'published_date' => now()->toIso8601String(),
                    ]
                ]
            ])
        ]);

        $repo = app(ArticleRepositoryInterface::class);
        $service = new NYTApiService($repo);
        $service->fetchAndStore();

        $this->assertDatabaseHas('articles', [
            'source' => 'New York Times',
            'title' => 'NYT Title',
        ]);
    }
}

