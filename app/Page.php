<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
    	'site_id',
        'page_name', 
        'page_title',
        'menu_title',
        'content', 
        'up_page_title',
        'up_menu_title',
        'up_content',
        'status',
        'cover_image'
    ];

    public function site() {
    	$this->belongsToy('App\Site');
    }
}
