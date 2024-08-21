<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function postdata()
    {
        return view('rest_demo');
    }

    public function getdata(Request $request)
    {
        echo "<pre>";
        print_r($request->all());

    }

}
