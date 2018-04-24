<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/home');
});

/*Views*/
View::composer('/home', 'HeaderComposer');


/*Blog*/
Route::get('/blog', 'PostController@index');

Route::get('/posts/create',  'PostController@create');

Route::post('/posts/save',  'PostController@store');

Route::get('/blog/comments/save',  'PostController@saveComment');

Route::get('/posts/{id}',  'PostController@show');

Route::get('/blog/comments/{id}',  'PostController@showComment');

Route::get('/posts/{id}/edit', 'PostController@edit');

Route::get('/blog/comments/{id}/edit',  'PostController@editComment');

Route::put('/posts/{id}/update', 'PostController@update');

Route::get('/blog/comments/{id}/update',  'PostController@updateComment');

Route::get('/posts/{id}/delete', 'PostController@destroy');

Route::get('/blog/comments/{id}/delete',  'PostController@deleteComment');

/*Categories*/
Route::get('/categories', 'CategoriesController@index');

Route::get('/categories/create',  'CategoriesController@create');

Route::post('/categories/save',  'CategoriesController@store');

Route::get('/categories/{id}/edit', 'CategoriesController@edit');

Route::put('/categories/{id}/update', 'CategoriesController@update');

Route::get('/categories/{id}/delete', 'CategoriesController@destroy');

/*Products*/
Route::get('/shop/{category}', 'ProductsController@index');

Route::get('/shop/{id}', 'ProductsController@show');

Route::get('/admin/products/create',  'ProductsController@create');

Route::post('/admin/products/save',  'ProductsController@store');

Route::get('/admin/products/{id}/edit', 'ProductsController@edit');

Route::put('/admin/products/{id}/update', 'ProductsController@update');

Route::get('/admin/products/{id}/delete', 'ProductsController@destroy');

/*Site*/
Route::get('/page/{name}', 'SiteController@getPage');

Route::get('/admin/site', 'SiteController@index');

Route::get('/admin/pages', 'SiteController@getAllPages');

Route::get('/admin/pages/create',  'SiteController@createPage');

Route::post('/admin/site/save',  'SiteController@store');

Route::post('/admin/pages/save',  'SiteController@storePage');

Route::get('/admin/site/{id}/edit', 'SiteController@edit');

Route::get('/admin/pages/{id}/edit', 'SiteController@editPage');

Route::put('/admin/sitee/{id}/update', 'SiteController@update');

Route::put('/admin/pages//{id}/update', 'SiteController@updatePage');

Route::get('/admin/pages/{id}/delete', 'SiteController@destroy');


/*Users*/
Route::get('/admin/users', 'UsersController@index');

Route::get('/admin/users/create',  'UsersController@create');

Route::post('/adnin/users/save',  'UsersController@store');

Route::get('/admin/users/{id}/edit', 'UsersController@edit');

Route::put('/admin/users/{id}/update', 'UsersController@update');

Route::get('/admin/users/{id}/delete', 'UsersController@destroy');


/*Newsletters*/
Route::get('/admin/newsletters', 'NewslettersController@index');

Route::get('/admin/newsletters/create',  'NewslettersController@create');

Route::post('/admin/newsletters/save',  'NewslettersController@store');

Route::post('/subscribers/save',  'NewslettersController@subscribe');

Route::get('/admin/newsletters/{id}/edit', 'NewslettersController@edit');

Route::put('/admin/newsletters/{id}/update', 'NewslettersController@update');

Route::get('/admin/newsletters/{id}/delete', 'NewslettersController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
