<?php

namespace App\Http\Controllers;

use App\Category;
use App\Auth;
use Illuminate\Http\Request;

class HeaderComposer.php
{

	public function compose(View $view)
    {
        $user       = Auth()->user;
        $categories = Category::all();
        $view->with('auth', $user);
        $view->with('categories', $categories);
    }
}
