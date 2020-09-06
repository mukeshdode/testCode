<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class VendorLoginController extends Controller
{
    public function __construct(){
      $this->middleware('guest:vendor');  
    }

    public function showLoginForm(){
        return view('auth.vendor-login');
    }

    public function login(Request $request){

        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if(Auth::guard('vendor')->attempt(['email'=>$request->email, 'password'=>$request->password],$request->remember)){
            return redirect()->intended(route('vendor.dashboard'));
        }
        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
