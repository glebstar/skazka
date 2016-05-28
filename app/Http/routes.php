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
use Illuminate\Http\Request;
use App\Http\Requests\AdminCmsSaveRequest;

Route::get('/', ['as'=>'home', 'uses' => 'HomeController@index']);

Route::group(['middleware' => 'admin'], function(){
    Route::get('/admin', ['as'=>'admin', 'uses' => 'AdminController@index']);
    Route::get('/admin/main', function(){
        $page = Cms::where('path', '')->first();
        return view('admin.main', ['body' => $page->body]);
    });
    
    Route::post('/admin/main/save', function(Request $request){
        $body = base64_encode($request->editor1);
        Cms::where('path', '')->update(['body' => $body]);
        return redirect('/');
    });
    
    Route::get('/admin/cms/edit/{id}', function($id){
        $page = Cms::where('id', $id)->first();
        if(!$page) {
            abort(404);
        }
        
        if($page->path == '') {
            abort(404);
        }
        
        return view('admin.cms.edit', ['id' => $page->id, 'path' => $page->path, 'title' => $page->title, 'sort' => $page->sort, 'isMain' => $page->is_main, 'body' => $page->body]);
    });
    
    Route::post('/admin/cms/edit/save/{id}', function(AdminCmsSaveRequest $request, $id){
        // валидация происходит в классе AdminCmsSaveRequest
        $page = Cms::where('id', $id)->first();
        $page->savePage($request);

        return redirect('/' . $request->path);
    });
    
    Route::get('/admin/cms', function(){
        $pages = Cms::where('path', '<>', '')
                ->orderBy('sort')
                ->orderBy('path')
                ->get();
        
        return view('admin.cms', ['pages' => $pages]);
    });
    
    Route::get('/admin/cms/add', function(){
        return view('admin.cms.add');
    });
    
    Route::post('/admin/cms/add/save', function(AdminCmsSaveRequest $request){
        $page = new Cms();
        $page->savePage($request);

        return redirect('/' . $request->path);
    });
    
    Route::get('/admin/cms/del/{id}', function($id){
        Cms::destroy($id);      
        return redirect('/admin/cms');
    });
});

Route::auth();

Route::get('{slug}', function($slug)
{
    $page = Cms::where('path', $slug)->first();
    if(!$page) {
        abort(404);
    }

    return view('cms', ['id' => $page->id, 'title' => $page->title, 'body' => base64_decode($page->body)]);
})->where('slug', '([A-z\d-\/_.]+)?');
