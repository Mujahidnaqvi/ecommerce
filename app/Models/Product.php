<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function categoryData(){
        // return $this->hasOne('App\Models\Category');  just for _id name
        return $this->hasOne ('App\Models\Category','id','category');
    }
}
