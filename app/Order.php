<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     protected $fillable = [
        'user_id',
        'reference', 
        'total_unit_price',
        'total_basket_price', 
        'total_quantity',
        'billing_address_id', 
        'shipping_address_id' 
    ];

    public function user() {
    	$this->belongsTo('App\User');
    }

    public function productorder() {
        $this->hasMany('App\ProductOrder');
    }

    public function useraddress() {
        $this->hasMany('App\UserAddress');
    }

}
