<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Article;

class ArticleApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_articles_endpoint_returns_successful_response()
    {
        Article::factory()->count(3)->create();

        $response = $this->getJson('/api/articles');

        $response->assertStatus(200)->assertJsonStructure(['success','data']);
    }

    public function test_articles_can_be_filtered_by_source()
    {
        Article::factory()->create(['source' => 'BBC']);
        Article::factory()->create(['source' => 'CNN']);

        $response = $this->getJson('/api/articles?source=BBC');

        $response->assertStatus(200)
                 ->assertJsonFragment(['source' => 'BBC']);
    }

    public function test_filter_by_author()
    {
        Article::factory()->create(['author' => 'Ali']);
        Article::factory()->create(['author' => 'Zain']);

        $response = $this->getJson('/api/articles?author=Ali');
        $response->assertJsonFragment(['author' => 'Ali']);
    }
}

