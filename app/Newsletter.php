<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected fillable['date_of_newsletter','title','content','newsletter_image','status'];

    public function subscriber() {
    	$this->hasMany('App\Subscriber');
    }
}
