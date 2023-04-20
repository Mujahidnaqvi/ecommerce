<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function getNameAttribute($value){
     return lcfirst($value);
    }

    public function getColorAttribute($value){
        return $value." Color";
    }

    public function setNameAttribute($value){
        return $this->attributes['name']= 'Awesome '. $value;
    }

    public function setModelAttribute($value){
        return $this->attributes['model']= $value. ' Model';
    }

}
