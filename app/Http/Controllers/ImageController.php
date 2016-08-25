<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Storage;

class ImageController extends Controller
{
    public function get($picname){
        $content = Storage::get('public/'.$picname);
        header("Content-Type: image/jpeg;text/html; charset=utf-8");
        echo $content;
        exit; 

    }
}
