<?php
namespace App\Http\Repostry;

use App\Models\FAQ;
use App\Models\Course;
use App\Models\Slider;
use App\Models\Teacher;
use App\Http\Interfaces\EndUserInterface;

class EndUserRepostries implements EndUserInterface{
    public function show(){
        $slider=Slider::get();
        $course=Course::with("Course")->get();
        $teacher=Teacher::get();
        return view("index",compact("slider","course","teacher"));
    }
    public function course(){
        $course=Course::with("Course")->get();
        return view("page.courses",compact("course"));
    
       }
       public function Teacher(){
        $teacher=Teacher::get();
        return view("page.Team",compact("teacher"));
       }
    
       public function FAQS(){
          $FAQ=FAQ::get();
         return view("page.Faqs",compact("FAQ"));
        }
        public function Contact(){
         return view("page.contact");
        }
}


?>