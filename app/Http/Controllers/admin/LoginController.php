<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    function LoginPage(){
        return view("admin.login");
    }
    function Login(LoginRequest $request){
        
        if(Auth::attempt($request->only(["email","password"]))){
            return redirect(route("admin.faq.allFAQ"));
        }
        Alert::error("error","User Not Found");
            return redirect()->back();
    }
    function Logout(Request $request){
     session()->flush();
      Auth::logout();
     return redirect(route('admin.LoginPage'));
    }
}
