<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected fillable['role_id','role'];

    public function user() {
    	$this->hasMany('App\User');
    }
}
