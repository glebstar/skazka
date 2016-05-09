<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cms extends Model
{
    protected $table = 'cms';
    
    public static function getNav()
    {
        return self::where('is_main', 1)->orderBy('sort')->get();
    }
}
