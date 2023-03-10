<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncludeController extends Controller
{
    //

    function jsarray(){
        $users=['Mujahid', 'Kumail', 'Raza'];
        return view('include-any-file',['names'=>$users]);
    }
}

