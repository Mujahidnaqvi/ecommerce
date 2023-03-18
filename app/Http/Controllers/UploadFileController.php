<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    //
    function uploadFile(Request $req){
        //  echo "working";
        $req->file('ufile')->store('image');
        
    }
}
