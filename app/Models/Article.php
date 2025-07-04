<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
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
