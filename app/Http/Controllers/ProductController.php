<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //

    function name($productName){

        return view('products',["name"=>$productName]);
    }

    public function relationShow(){
        return Product::find(2)->categoryData;
    }

}
