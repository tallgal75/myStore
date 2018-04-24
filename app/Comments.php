<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'comments', 
        'user_id',
        'post_id'
    ];

    public function post() {
    	$this->belongsTo('App\Post');
    }

    public function user() {
      return $this->belongsTo('App\User');
    }

}
