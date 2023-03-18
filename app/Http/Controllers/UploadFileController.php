<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    //
    function uploadFile(Request $req){
        //  echo "working";
        $data = $req->file('ufile')->store('public/storage');
        $req->session()->flash('uploaded',$data);
        return redirect('uploadfile');
    }
}
