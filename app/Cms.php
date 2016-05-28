<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\AdminCmsSaveRequest;

class Cms extends Model
{
    protected $table = 'cms';
    
    public static function getNav()
    {
        return self::where('is_main', 1)->orderBy('sort')->get();
    }
    
    public function savePage(AdminCmsSaveRequest $request)
    {
        $body = base64_encode($request->editor1);
        
        $this->path = $request->path;
        $this->title = $request->title;
        $this->body = $body;
        $this->sort = $request->sort;
        $this->is_main = $request->is_main;
        $this->save();
    }
}
