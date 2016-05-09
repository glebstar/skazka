<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Cms;

class HomeController extends Controller
{
    public function index()
    {
        $page = Cms::where('path', '')->first();
        
        return view('home.index', ['body' => $page->body]);
    }
}
