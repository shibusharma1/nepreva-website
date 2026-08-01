<?php

namespace App\Models\Galleries;

use Illuminate\Database\Eloquent\Model;

class VideoGalleryModel extends Model
{
    protected $table = 'cl_gallery_videos';
    protected $fillable = ['category_id', 'title', 'video', 'caption'];
     public function category()
    {
        return $this->belongsTo(VideoGalleryCategoryModel::class, 'category_id');
    }
    /**
     * Convert any YouTube URL to Embed URL
     */
    public function getEmbedUrlAttribute()
    {
        if (!$this->video) {
            return '';
        }

        preg_match(
            '/(?:youtu\.be\/|youtube\.com\/watch\?v=|youtube\.com\/embed\/)([^&\n?#]+)/',
            $this->video,
            $matches
        );

        if (!isset($matches[1])) {
            return $this->video;
        }

        return "https://www.youtube.com/embed/{$matches[1]}";
    }

    /**
     * Thumbnail
     */
    public function getThumbnailAttribute()
    {
        preg_match(
            '/(?:youtu\.be\/|youtube\.com\/watch\?v=|youtube\.com\/embed\/)([^&\n?#]+)/',
            $this->video,
            $matches
        );

        if (!isset($matches[1])) {
            return asset('images/no-image.jpg');
        }

        return "https://img.youtube.com/vi/{$matches[1]}/hqdefault.jpg";
    }
}
