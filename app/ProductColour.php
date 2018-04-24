<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductColour extends Model
{
    protected fillable['colour_id','colour'];

    public function product() {
    	$this->hasMany('App\Product');
    }
}
