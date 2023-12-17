<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Models\Course;
use App\Models\Slider;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\EndUserInterface;

class EndUserControler extends Controller
{
  
   public $EndUser;
   function __construct(EndUserInterface $EndUserInterface)
   {
      $this->EndUser=$EndUserInterface;  
   }
   public function show(){
     
     return $this->EndUser->show();
   }
   public function course(){
      return $this->EndUser->course();
   
   }
   public function Teacher(){
   return $this->EndUser->Teacher();
   }
   public function FAQS(){
      return $this->EndUser->FAQS();
   }
   public function Contact(){
      return $this->EndUser->Contact();

   }
}

