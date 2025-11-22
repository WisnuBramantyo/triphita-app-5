<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'content',
        'excerpt',
        'category',
        'status',
        'featured_image',
        'meta_description',
        'tags',
        'publish_date'
    ];

    protected $casts = [
        'tags' => 'array',
        'publish_date' => 'datetime'
    ];
}