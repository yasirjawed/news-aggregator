<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'description',
        'content',
        'url',
        'url_to_image',
        'source',
        'category',
        'published_at',
    ];
}
