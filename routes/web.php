<?php

use App\Models\Course;
use App\Models\Teacher;
use Faker\Guesser\Name;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EndUserControler;
use App\Http\Controllers\admin\FAQController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\TeacherController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(["prefix"=>"page"],function(){
    Route::get('/home', [EndUserControler::class ,"show"])->name('index');
    Route::get('/courses', [EndUserControler::class ,"course"])->name("courses");
    Route::get('/Teacher', [EndUserControler::class ,"Teacher"])->name("teacher");
    Route::get('/FAQS', [EndUserControler::class ,"FAQS"])->name("FAQ");
    Route::get('/Contact', [EndUserControler::class ,"Contact"])->name("Contact");
    Route::post('/send', [ContactController::class ,"store"])->name("SendMassage");



});

Route::get("admin/login",[LoginController::class ,"LoginPage"])->name("admin.LoginPage");
Route::post("admin/login",[LoginController::class ,"Login"])->name("admin.Login");
Route::group(["prefix"=>"admin","as"=>"admin." ,"middleware"=>"auth"],function(){

  
    Route::post("/logout",[LoginController::class ,"Logout"])->name("logout");



    Route::group(["prefix"=>"faq","as"=>"faq."],function(){
        Route::get('/', [FAQController::class,"create"])->name("create");
        Route::post('/create', [FAQController::class,"store"])->name("store");
        Route::get('/AllFaq', [FAQController::class,"index"])->name("allFAQ");
        Route::get("/delete/{id}",[FAQController::class,"delete"])->name("delete");
        Route::get("/edit/{id}",[FAQController::class,"edit"])->name("edit");
        Route::post('/updata', [FAQController::class,"update"])->name("updata");
   });
   Route::group(["prefix"=>"slider","as"=>"slider."],function(){
        Route::get('/', [SliderController::class,"create"])->name("create");
        Route::post('/create', [SliderController::class,"store"])->name("store");
        Route::get('/allslider', [SliderController::class,"index"])->name("Allslider");
        Route::get('/delete/{id}', [SliderController::class,"destroy"])->name("delete");
        Route::get('/edit/{id}', [SliderController::class,"edit"])->name("edit");
        
        Route::post('/updata/{id}', [SliderController::class,"update"])->name("updata");




    });
    Route::group(["prefix"=>"teacher","as"=>"teacher."],function ()  {
        Route::get('/', [TeacherController::class,"create"])->name("create");
        Route::post('/create', [TeacherController::class,"store"])->name("store");
        Route::get('/allteacher', [TeacherController::class,"index"])->name("AllTeacher");
        Route::get("delete/{id}",[TeacherController::class,"destroy"])->name("delete");
        Route::get('/edit/{id}', [TeacherController::class,"edit"])->name("edit");
        Route::post('/updata/{id}', [TeacherController::class,"update"])->name("updata");


        
    });
    Route::group(["prefix"=>"course","as"=>"course."],function ()  {
        Route::get('/', [CourseController::class,"create"])->name("create");
        Route::post('/create', [CourseController::class,"store"])->name("store");
        Route::get('/allcourse', [CourseController::class,"index"])->name("AllCourse");
        Route::get("delete/{id}",[CourseController::class,"destroy"])->name("delete");
        Route::get('/edit/{id}', [CourseController::class,"edit"])->name("edit");
        Route::post('/updata/{id}', [CourseController::class,"update"])->name("updata");


        
    });

});

Route::get('inde', [HomeController::class,"index"]);






