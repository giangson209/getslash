<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryLibs extends Model
{
    const TYPE_STYLE = 'styles';
    const TYPE_PROJECT_DETAIL = 'project_detail';

    protected $table = 'gallery_libs';

    protected $fillable = [
        'model',
        'model_id',
        'path',
        'type'
    ];

    /**
     * @param $model
     * @param $modelId
     * @param $type
     * @param $gallery
     * @return bool
     */
    public static function createGallery($model, $modelId, $type, $gallery): bool
    {
        // Delete all item in gallery before save
        self::where([
            'model'    => $model,
            'model_id' => $modelId,
            'type'     => $type
        ])->delete();

        if (!empty($gallery)) {
            foreach ($gallery as $item) {
                self::create([
                    'model'    => $model,
                    'model_id' => $modelId,
                    'type'     => $type,
                    'path'     => $item,
                ]);
            }
        }

        return true;
    }

    public static function deleteGallery($model, $modelId, $type)
    {
        return self::where([
            'model'    => $model,
            'model_id' => $modelId,
            'type'     => $type
        ])->delete();
    }

    public static function getGallery($model, $modelId, $type)
    {
        return self::where([
            'model'    => $model,
            'model_id' => $modelId,
            'type'     => $type
        ])->orderBy('created_at', 'desc')->get();
    }
}
