<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable=["image"];
    public static function Rules(){

        return [
            "image"=>"required"
        ];
    }
    public function getImageAttribute($value){
        return "admin/images/slider/" . $value;
    }
}
