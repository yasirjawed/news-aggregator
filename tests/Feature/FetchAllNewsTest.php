<?php
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FetchAllNewsTest extends TestCase
{
    use RefreshDatabase;

    public function test_news_fetch_command_runs_successfully()
    {
        Http::fake();

        $exitCode = Artisan::call('news:fetch');

        $this->assertEquals(0, $exitCode);
    }
}
