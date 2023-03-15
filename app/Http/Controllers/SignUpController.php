<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    //
    function create(Request $req){
        return $req->input();
    }

    function read(Request $req){
    return $req;
    }
    
    function delete(){

    }

    function update(){

    }
}
