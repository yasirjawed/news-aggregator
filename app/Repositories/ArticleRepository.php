<?php

namespace App\Repositories;

use App\Models\Article;
Use App\Interfaces\ArticleRepositoryInterface;

class ArticleRepository implements ArticleRepositoryInterface
{
    public function filter(array $filters)
    {
        return Article::when($filters['q'] ?? null, fn($q, $val) =>
                    $q->where('title', 'like', "%$val%")
                    ->orWhere('description', 'like', "%$val%")
                    ->orWhere('content', 'like', "%$val%"))
            ->when($filters['category'] ?? null, fn($q, $val) => $q->where('category', $val))
            ->when($filters['source'] ?? null, fn($q, $val) => $q->where('source', $val))
            ->when($filters['author'] ?? null, fn($q, $val) => $q->where('author', 'like', "%$val%"))
            ->when($filters['from'] ?? null, fn($q, $val) => $q->whereDate('published_at', '>=', $val))
            ->when($filters['to'] ?? null, fn($q, $val) => $q->whereDate('published_at', '<=', $val))
            ->when($filters['sort'] ?? null, fn($q, $val) =>
                $val === 'oldest'
                    ? $q->orderBy('published_at', 'asc')
                    : $q->orderBy('published_at', 'desc')
            )
            ->paginate($filters['per_page'] ?? 15);
    }

    public function find(int $id)
    {
        return Article::findOrFail($id);
    }

    public function storeOrUpdate(array $data)
    {
        return Article::updateOrCreate(
            ['url' => $data['url']],
            $data
        );
    }
}