<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FruitsController extends Controller
{
    //

    public function fruitslist(){
        return view('fruits',['name'=>'Mango']);
    }

    public function fruitsarray(){
        return view('fruits-array',['fruitsname'=>['Mango','Banana','Orange','PineApple']]);
    }
}
