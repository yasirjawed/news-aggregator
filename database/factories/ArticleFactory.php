<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    protected $model = Article::class;
    
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'author' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'content' => $this->faker->text(500),
            'url' => $this->faker->unique()->url,
            'url_to_image' => $this->faker->imageUrl(),
            'source' => $this->faker->randomElement(['BBC', 'CNN', 'NYT']),
            'category' => $this->faker->word,
            'published_at' => now(),
        ];
    }
}
