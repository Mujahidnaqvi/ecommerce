<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    function getNameAttribute($value){
     return lcfirst($value);
    }

    function getColorAttribute($value){
        return $value." Color";
    }
}
