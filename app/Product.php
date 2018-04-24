<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'product_name', 
        'category_id',
        'description',
        'price', 
        'sale_price',
        'discount_percentage',
        'colour_id',
        'size_id',
        'status',
        'in_wishlist'
    ];

    public function category() {
    	$this->belongsTo('App\Category');
    }

    public function productsize() {
    	$this->belongsTo('App\ProductSize');
    }

    public function productcolour() {
    	$this->belongsTo('App\ProductColour');
    }

    public function productorder() {
        $this->belongsTo('App\Category');
    }
}
