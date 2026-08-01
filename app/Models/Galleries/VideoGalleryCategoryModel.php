<?php

namespace App\Models\Galleries;

use Illuminate\Database\Eloquent\Model;

class VideoGalleryCategoryModel extends Model
{
    protected $table = 'cl_gallery_video_categories';
    protected $fillable = ['category', 'caption', 'video'];
    public function videos()
    {
        return $this->hasMany(VideoGalleryModel::class, 'category_id');
    }
}
