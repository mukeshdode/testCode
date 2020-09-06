@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Vendor Dashboard</div>

                <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="display-3">Products</h1>    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <td>ID</td>
                            <td>Title</td>
                            <td>Description</td>
                            <td>Cost Price</td>
                            <td>Tax</td>
                            <td>Delivery Cost</td>
                            <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->title}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->cost_price}}</td>
                                <td>{{$product->tax->name}}</td>
                                <td>{{$product->delivery_cost}}</td>
                                <td>
                                    <a href="{{ route('vendor.products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection