<?php

namespace App\Http\Controllers;
use App\Product;
use App\Tax;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:vendor');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::with('tax')->get();
        return view('product.index', compact('products'));
    }

    public function edit(Request $request, $id)
    {
        $product = Product::find($id);
        $taxes = Tax::get();
        return view('product.edit', compact('product','taxes'));        
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required|max:50',
            'cost_price'=>'required|numeric',
            'delivery_cost'=>'required|numeric',
        ]);
        $product = Product::where('id', '=', $id)->first();

        $product->update($request->all());
        
        return redirect('/vendor/products')->with('success', 'product updated!');
    }
}
