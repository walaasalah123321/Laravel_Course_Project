<?php

namespace App\Models;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{

    use HasFactory;
    protected $fillable=["name","price","teacher_Id","image"];
    public static function Rules(){

        return [
            "image"=>"required",
            "teacher_Id"=>"required",
            "name"=>"required|min:5",
            "price"=>"required",
        ];
    }
    public static function UpdataRoles(){

        return [
            "teacher_Id"=>"required",
            "name"=>"required|min:5",
            "Price"=>"required",
        ];
    }
    public function getImageAttribute($value){
        return "admin/images/course/" . $value;
    }
    public function Course(){
        return $this->belongsTo(Teacher::class,"teacher_Id","id");
    }
}
