<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable=["name","email","massage"];
   static function rules(){
       return  ["name"=>"required","email"=>"required","massage"=>"required|min:5"];
    }
}
