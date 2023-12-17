<?php
namespace App\Http\Controllers\admin;


use App\Models\FAQ;
use App\Models\Course;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatFaqRequest;
use Illuminate\Support\Testing\Fakes\Fake;
use RealRashid\SweetAlert\Facades\Alert;


class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $columns=["Question","answer"];
    public function index()
    {
        $data=FAQ::get();
        return view("admin.allFaq",compact("data"));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faqForm');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatFaqRequest $request)
    {
        // $request->validate([

        //     "Question" =>"required",
        //     "answer" =>"required"

        // ]);
        addslashes($request->Question);
        addslashes($request->answer);

        FAQ::create($request->only($this->columns));
        Alert::success('Success ', 'Add sucessfully');

        return redirect()->back();
    }

 
    /**
     * Display the specified resource.
     */
    public function show(FAQ $fAQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($fAQ)
    {

        $data= FAQ::find($fAQ);
        return view("admin.edit",compact('data'));
        
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreatFaqRequest $request)
    {
        FAQ::find($request->id)->update($request->only($this->columns));
        Alert::success('Success ', 'Faq Updata sucessfully');

         return redirect(route("admin.faq.edit",[$request->id]));
        
    }
    function Delete( $id){
        FAQ::where("id",$id)->first()->delete();
        Alert::success('Success ', 'FAQ Delete sucessfully');

        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FAQ $fAQ)
    {
        //
    }
}
