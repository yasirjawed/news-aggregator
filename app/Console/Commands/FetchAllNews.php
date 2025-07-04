<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\NewsAggregatorService;

class FetchAllNews extends Command
{
    protected $signature = 'news:fetch';
    protected $description = 'Fetch news from all integrated sources';

    public function __construct(protected NewsAggregatorService $aggregator)
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info("Fetching news from all APIs...");
        $this->aggregator->fetchAll();
        $this->info("News fetching complete.");
    }
}
