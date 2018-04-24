<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfuctOrder extends Model
{
    protected fillable['product_id','order_id'];

    public function product() {
    	$this->hasMany('App\Product');
    }

    public function order() {
    	$this->hasMany('App\Order');
    }
}
