<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashSessionController extends Controller
{
    //
    function sessionFlash(Request $req){
       $data = $req->input('username');
       $req->session()->flash('user',$data); 
       return redirect('flash');
    }
}
