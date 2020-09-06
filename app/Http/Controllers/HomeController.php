<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\saleorder;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::id();
        $sales = saleorder::with('user','transactions.product','transactions.category','transactions.vendor','tax')->where('user_id', $user)->get();
        // print_r( $sales->toArray());die();
        return view('home', compact('sales'));        
    }
}
