<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function testpage(){
        echo "this is a test page";
    }


    public function demopage(){
        return view('anson_web');
    }
}
