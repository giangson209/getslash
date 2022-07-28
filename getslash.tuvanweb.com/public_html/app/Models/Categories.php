<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name_vi', 'name_en', 'slug', 'parent_id', 'image', 'meta_title_vi', 'meta_description_vi', 'meta_keyword_vi', 'meta_title_en', 'meta_description_en', 'meta_keyword_en', 'type', 'logo', 'order', 'desc','icon'];


    public function get_child_cate()
    {
        return $this->where('parent_id', $this->id)->get();
    }

    public function getParent()
    {
        return $this->where('id', $this->parent_id)->first();
    }

    public function Posts()
    {
        return $this->belongsToMany('App\Models\Posts', 'post_category', 'id_category', 'id_post');
    }
}
