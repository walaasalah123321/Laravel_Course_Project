<?php

namespace App\Http\Controllers\admin;

use App\Models\Course;
use App\Models\Contact;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Traits\ImagesTraite;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\CourseupdataRequest;

class CourseController extends Controller
{
    use ImagesTraite;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $courses=Course::with("Course:id,name")->get();
    //  dd($courses->Course->name);
       return view("admin.course.allCourses",compact("courses"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teacher=Teacher::get();
        return view("admin.course.courseForm",compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {
        $file=$request->image;
        $FileName=time().$request->image->getClientOriginalName();
        $this->uploadImage($file,$FileName,"course");
        Course::create([
            "name"=>$request->name,
            "price"=>$request->price,
            "teacher_Id"=>$request->teacher_Id,
            "image"=>$FileName,
        ]);
        Alert::success('Add ', 'course Add sucessfully');
        return redirect()->back();    
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $course)
    {
       $courses=Course::with("Course")->get()->find($course);
       $teacher=Teacher::get();
       return view("admin.course.courseedit",compact('courses',"teacher"));

       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseupdataRequest $request,  $course_id)
    {
        $course=Course::find($course_id);
        if($request->has("image")){
            $filename=time().$request->image->getClientOriginalName();
          $this->uploadImage($request->image,$filename,"course",$course->image);

        }
        $course->update([
            "name"=>$request->name,
            "price"=>$request->Price,
            "teacher_Id"=>$request->teacher_Id,
            "image"=>isset($filename)?$filename:$course->getRawOriginal('image'),
        ]);
        Alert::success('Updata ', 'course Update sucessfully');
        return redirect()->back();   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $course)
    {
        
        $course=Course::find($course);
        unlink(public_path($course->image));
        $course->delete();
        Alert::success('Delet ', 'course Delete sucessfully');
        return redirect()->back();   
    }
}
