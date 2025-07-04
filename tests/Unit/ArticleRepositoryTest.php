<?php
namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Article;
use App\Repositories\ArticleRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticleRepositoryTest extends TestCase
{
    use RefreshDatabase;

    protected ArticleRepository $repo;

    public function setUp(): void
    {
        parent::setUp();
        $this->repo = new ArticleRepository();
    }

    public function test_store_or_update_creates_article()
    {
        $data = Article::factory()->make()->toArray();

        $article = $this->repo->storeOrUpdate($data);

        $this->assertDatabaseHas('articles', ['url' => $data['url']]);
    }

    public function test_find_returns_article()
    {
        $article = Article::factory()->create();

        $found = $this->repo->find($article->id);

        $this->assertEquals($article->title, $found->title);
    }
}
