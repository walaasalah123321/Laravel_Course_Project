<?php
namespace App\Http\Controllers;


use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Interfaces\EndUserInterface;
use Symfony\Component\HttpFoundation\Session\Session;


class ContactController extends Controller
{
    

    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
 
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequest $request)
    {
        Contact::create($request->only(["name","email","massage"]));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
