<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Trails\ModelScopes;
use Conner\Tagging\Taggable;

class Posts extends Model
{
    use ModelScopes, Taggable;

    protected $table = 'posts';

    protected $fillable = [
        'name_vi', 'name_en', 'slug', 'desc_vi', 'desc_en', 'content_vi', 'content_en', 'image', 'type', 'hot', 'status', 'meta_title', 'meta_description', 'meta_keyword', 'view_count', 'published_at', 'user_id'
    ];

    public function category()
    {
        return $this->belongsToMany('App\Models\Categories', 'post_category', 'id_post', 'id_category');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    protected $dates = [
        'published_at',
    ];
}
