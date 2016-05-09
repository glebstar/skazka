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

Route::get('{cmsPath}', function($cmsPath)
{
    $page = Cms::where('path', $cmsPath)->first();
    if(!$page) {
        abort(404);
    }

    return view('cms', ['title' => $page->title, 'body' => base64_decode($page->body)]);
});
