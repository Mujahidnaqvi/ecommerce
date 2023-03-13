<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emp;

class EmployeeController extends Controller
{
    //
    function getData(){
        return Emp::all();
    }
}
