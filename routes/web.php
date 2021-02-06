<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('home.home');
}) -> name('home');


Route::resource('post', 'PostController');// el segundo tiene que ser igual al controlador, carpeta Controllers


Route::group(['prefix' => 'posts'], function () {
    Route::post('search', 'PostController@search')->name('post.search');

});

// Route::get('/cat', function () {
//     return view('category.index'); sabes hacer? ? ? ? '
// });
Route::resource('category', 'CategoriesController');




