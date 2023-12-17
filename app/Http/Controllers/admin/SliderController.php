<?php

namespace App\Http\Controllers\admin;

use App\Models\Slider;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Traits\ImagesTraite;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use GuzzleHttp\Psr7\Request as Psr7Request;
use RealRashid\SweetAlert\Facades\Alert;

class SliderController extends Controller
{
    use ImagesTraite;
     
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider=Slider::get();
        return view("admin.Slider.Allslider",compact('slider'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.Slider.SliderForm");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request)
    {
        $file=$request->image;
        $fileName=time().$request->image->getClientOriginalName();
        $this->uploadImage($file,$fileName,"slider");
        Slider::create(["image"=>$fileName]);
        Alert::success('Success ', 'Add  Slider sucessfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slider)
    {
        $slider=Slider::find($slider);
        return view("admin.Slider.Slideredit",compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SliderRequest $request, $slider)
    {
        
        $sl=Slider::find($slider);
        $fileName=time().$request->image->getClientOriginalName();
        $this->uploadImage($request->image,$fileName,"slider",$sl->image);
        $sl->update(["image"=>$fileName]);
        Alert::success('updata ', 'updata  Slider sucessfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $slider)
    {
        $slider=Slider::find($slider);
        unlink(public_path( $slider->image));
        $slider->delete();
        Alert::success('Delete ', 'Delete  Slider sucessfully');
        return redirect()->back();
    }
}
