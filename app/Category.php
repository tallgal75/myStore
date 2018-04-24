<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected fillable['category_id','category'];

    public function product() {
    	$this->hasMany('App\Product');
    }
}
