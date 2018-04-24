<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected fillable['newsletter_id','email'];

    public function newsletter() {
    	$this->belongsTo('App\Newsletter');
    }
}
