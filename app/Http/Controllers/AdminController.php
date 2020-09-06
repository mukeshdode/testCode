<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
use Illuminate\Support\Facades\Input;
use Hash;

class AdminController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $vendors = Vendor::all();
        return view('admin',  compact('vendors'));
    }
    
    public function create(){
        return view('vendor-form');
    }

    public function saveVendor(Request $request){
        $request->validate([
            'name'=>'required',            
            'email'=>'required',
            'password'=>'required|min:6'
        ]);

        $vendor = new Vendor([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  Hash::make($request->password)
        ]);
        $vendor->save();
        return redirect('/admin')->with('success', 'vendor created successfully!');
    }
}
