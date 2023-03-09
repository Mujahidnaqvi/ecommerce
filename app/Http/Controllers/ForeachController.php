<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForeachController extends Controller
{
    //

    function showall(){
       $users=['Mujahid','Kumail','Raza'];
       return view('foreach-loop',["users"=>$users]);

    }
}
