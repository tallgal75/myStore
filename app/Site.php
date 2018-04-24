<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = [
        'site_name', 
        'metadata',
        'copyright',
        'trademarks', 
        'privacy_policy',
        'facebook_url',
        'twitter_url',
        'pinterest_url',
        'gmail_url',
        'instgram_url'
    ];

    public function pages() {
    	$this->hasMany('App\Page');
    }
}
