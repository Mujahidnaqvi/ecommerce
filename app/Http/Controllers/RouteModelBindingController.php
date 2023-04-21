<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class RouteModelBindingController extends Controller
{
    //

    public function index(Car $key){
        // return $key;
        return $key->all();
    }
}
