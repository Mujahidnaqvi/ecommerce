<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    function name($productName){

        return view('products',["name"=>$productName]);
    }
}
