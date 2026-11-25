<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Model;

class PostTypeModel extends Model
{
    protected $table = 'cl_post_type';
    protected $fillable = ['post_type','uri','uid','caption','banner','content', 'ordering', 'is_menu', 'is_footer_menu', 'info_section_title', 'info_section_label_1', 'info_section_value_1', 'info_section_label_2', 'info_section_value_2', 'info_section_label_3', 'info_section_value_3'];
}
