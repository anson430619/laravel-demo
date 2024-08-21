<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetPostController extends Controller
{
    public function restapi(){
        return view('rest_api');
    }

    public function restapirequest(){
        return view('rest_api');
    }

    public function restapiresponse(Request $request){
        $data = $request;
        dd($data);
    }

    public function onerequest(){
        return view('rest_api');
    }

    public function oneresponse(Request $request){
        $data = $request->all();
        dd($data);
    }

    public function valrequest(){
        return view('rest_api');
    }

    public function valresponse(Request $request){
        $data = $request->all();
        dump($data);

        $request->validate(
            [
                'name' => 'nullable|string',
                'email' => 'required|email',
                'password' => 'required|min:8'
            ]
            );
            dd("Successfully validated and proceeding to save the data");
    }
}
