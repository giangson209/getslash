<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posttype extends Model
{
    protected $table = 'posttype';

    protected $fillable = [
        'name', 'slug', 'desc', 'content', 'image', 'type', 'hot', 'status', 'meta_title', 'meta_description', 'meta_keyword', 'published_at', 'logo', 'price', 'price_old', 'video', 'note'
    ];
}
