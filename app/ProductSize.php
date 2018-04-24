<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    protected fillable['size_id','size'];

    public function product() {
    	$this->hasMany('App\Product');
    }
}
