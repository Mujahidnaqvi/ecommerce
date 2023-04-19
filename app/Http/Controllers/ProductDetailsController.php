<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailsController extends Controller
{
    //

    public function show(){
        // return DB::table('products')->get();
        return DB::table('products')
        ->join('categories', 'products.category','=','categories.id')
        // ->select('categories.*')
        ->where('products.status', 1)
        ->get();
    }
}
