<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable=["name","image"];
    static function Rulse(){
        return [
            "name"=>"required|min:5",
            "image"=>"required"
        ];
    }
    static function rulesUpdata(){
        return [
            "name"=>"required|min:5",
        ];
    }
    public function getImageAttribute($value){
        return "admin/images/teacher/" . $value;
    }
    public function Teacher(){
        return $this->hasMany(Course::class,"teacher_Id","id");
    }
}

