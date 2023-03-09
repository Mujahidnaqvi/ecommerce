<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IfelseController extends Controller
{
    //

    function check(){

        return view('if-elseif-else',["name"=>'Mujahid']);

    }
}
