<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\ArticleRepositoryInterface;

class ArticleController extends Controller
{
    protected $articles;

    public function __construct(ArticleRepositoryInterface $articles)
    {
        $this->articles = $articles;
    }

    public function index(Request $request)
    {
        $filters = $request->only(['q', 'category', 'source', 'author', 'from', 'to']);
        return response()->json($this->articles->filter($filters));
    }

    public function show($id)
    {
        return response()->json($this->articles->find($id));
    }
}
