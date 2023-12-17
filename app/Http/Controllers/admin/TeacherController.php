<?php

namespace App\Http\Controllers\admin;

use App\Models\Contact;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Traits\ImagesTraite;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\TeacherUpdataRequest;

class TeacherController extends Controller
{
    use ImagesTraite;
    protected $colums=["name","image"];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher=Teacher::get();
        return view("admin.teacher.allteacher",compact('teacher'));
 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.teacher.teacherForm");
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request)
    {
        $file=$request->image;
        $FileName=time().$request->image->getClientOriginalName();
        $this->uploadImage($file,$FileName,"teacher");
        Teacher::create([
            "name"=>$request->name,
            "image"=>$FileName,
        ]);
        Alert::success('Add ', 'Teacher Add sucessfully');
        return redirect()->back();        
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $teacher_id)
    {
        $teacher=Teacher::findOrFail($teacher_id);
        
        return view('admin.teacher.teacheredit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeacherUpdataRequest $request,  $teacher_id)
    {
        $teacher=Teacher::find($teacher_id);
     
        
        $filename=explode('/',$teacher->image);
       if($request->has("image")){
            $fileName=time().$request->image->getClientOriginalName();
            $this->uploadImage($request->image,$fileName,"teacher",$teacher->image);
       }
       $teacher->update([
        'name'=>$request->name,
        'image'=>($request->has("image"))?$fileName:($filename[sizeof($filename)-1])
       ]);

       Alert::success('updata ', 'updata  Teacher sucessfully');
       return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $teacher)
    {
        $teacherDelet=Teacher::findOrFail($teacher);
        unlink(public_path($teacherDelet->image));
        $teacherDelet->delete();
    
        Alert::success('Delete ', 'Delete  Teacher sucessfully');
        return redirect()->back();
        
    }
}