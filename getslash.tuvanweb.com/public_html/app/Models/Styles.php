<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\GalleryLibs;

class Styles extends Model
{
    protected $table = 'styles';

    protected $fillable = [
        'name_vi',
        'name_en',
        'slug',
        'image',
        'logo',
        'desc_vi',
        'desc_en',
        'content_vi',
        'content_en',
        'status',
        'hot',
        'meta_title',
        'meta_description',
        'meta_keyword', 
        'user_id'
    ];

    public function getGalleryStyle()
    {
        return GalleryLibs::getGallery(Styles::class, $this->id, GalleryLibs::TYPE_STYLE);
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
