<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostFormDataController extends Controller
{
    //

    // function getData(Request $req){
    //      return $req->input();
    // }

    function postData(Request $req){

        return $req->input();

    }
}
