<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthUserController extends Controller
{
    //
    function userLogin(Request $req){
        // $data = $req->input();  it will collect the all inputs 
        $data = $req->input('username');
        // echo $data;
        $req->session()->put('user',$data);
        // echo session('user'); it will show the data stored in the session named as user
        return redirect('profile');

    }
}
