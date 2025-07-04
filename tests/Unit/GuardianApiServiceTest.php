<?php
namespace Tests\Unit;

use Tests\TestCase;
use App\Services\GuardianApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Interfaces\ArticleRepositoryInterface;

class GuardianApiServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_guardian_api_fetch_and_store()
    {
        Http::fake([
            'content.guardianapis.com/*' => Http::response([
                'response' => [
                    'status' => 'ok',
                    'results' => [
                        [
                            'webTitle' => 'Guardian Title',
                            'webUrl' => 'https://guardian.com/example',
                            'webPublicationDate' => now()->toIso8601String(),
                            'sectionName' => 'News',
                            'fields' => [
                                'trailText' => 'Guardian short desc',
                                'body' => 'Full Guardian content',
                                'thumbnail' => 'https://guardian.com/img.jpg',
                            ]
                        ]
                    ]
                ]
            ])
        ]);

        $repo = app(ArticleRepositoryInterface::class);
        $service = new GuardianApiService($repo);
        $service->fetchAndStore();

        $this->assertDatabaseHas('articles', [
            'source' => 'The Guardian',
            'title' => 'Guardian Title',
        ]);
    }
}

