<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recruitments extends Model
{
    protected $table = 'recruitments';

    protected $fillable = [
        'name_vi',
        'name_en',
        'slug',
        'image',
        'sort_desc_vi',
        'sort_desc_en',
        'desc_vi',
        'desc_en',
        'address_vi',
        'address_en',
        'qty',
        'offers_vi',
        'offers_en',
        'deadline',
        'status',
        'department',
        'type',
        'meta_title',
        'meta_description',
        'meta_keyword'
    ];
}
