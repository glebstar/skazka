<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Cms;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', ['as'=>'home', 'uses' => 'HomeController@index']);

Route::group(['middleware' => 'admin'], function(){
    Route::get('/admin', ['as'=>'admin', 'uses' => 'AdminController@index']);
});

Route::auth();

Route::get('{slug}', function($slug)
{
    $page = Cms::where('path', $slug)->first();
    if(!$page) {
        abort(404);
    }

    return view('cms', ['title' => $page->title, 'body' => base64_decode($page->body)]);
})->where('slug', '([A-z\d-\/_.]+)?');
