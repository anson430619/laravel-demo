<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VariableController extends Controller
{
    public function callname(){
        $firstname = "Anson";
        $lastname = "Dsouza";
        return view("viewpage",compact("firstname","lastname"));
    }
}
