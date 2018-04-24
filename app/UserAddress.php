<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable = [
        'user_id', 
        'address_type',
        'address_1',
        'address_2', 
        'city',
        'region',
        'country',
        'zip_code'
    ];

    public function user() {
        $this->belongTo('App\User');
    }
}
