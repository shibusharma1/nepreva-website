<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table = 'cl_posts';
    protected $fillable = [
        'post_date',
        'post_author',
        'price',
        'template',
        'template',
        'post_title',
        'sub_title',
        'post_content',
        'post_excerpt',
        'info_section_title',
        'info_section_label_1',
        'info_section_value_1',
        'info_section_label_2',
        'info_section_value_2',
        'info_section_label_3',
        'info_section_value_3',
        'uri',
        'uid',
        'page_key',
        'post_type',
        'post_parent',
        'post_order',
        'home_order',
        'thumbnail',
        'icon',
        'page_thumbnail',
        'banner',
        'page_video',
        'meta_keyword',
        'meta_description',
        'associated_title',
        'external_link',
        'post_tags',
        'project_status',
        'status',
        'published',
        'is_active',
        'is_draft',
        'is_trashed',
        'show_in_home',
        'is_password_protected',
        'is_commentable',
        'lang',
        'post_category'
    ];
    public function images()
    {
        return $this->hasMany('App\Models\Posts\PostImageModel', 'post_id');
    }
    public function associatePosts()
    {
        return $this->hasMany('App\Models\Posts\AssociatedPostModel', 'post_id');
    }
    public function documents()
    {
        return $this->hasMany('App\Models\Posts\PostDocModel', 'post_id');
    }
    public function parent()
    {
        return $this->belongsTo(PostModel::class, 'post_parent', 'id');
    }
    public function rootParent()
    {
        $post = $this;
        while ($post->parent) {
            $post = $post->parent;
        }
        return $post;
    }
    public function children()
    {
        return $this->hasMany(PostModel::class, 'post_parent', 'id')->orderBy('post_order', 'asc');
    }
}
