@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="display-3">Order List</h1>    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>Sales ID</td>
                                <td>User Name</td>
                                <td>Total price</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sales as $sale)
                            <tr>
                                <td>{{$sale->id}}</td>
                                <td>{{$sale->user->name}}</td>
                                <td>{{$sale->final_amount}}</td>
                            </tr>
                            <tr>
                            <table class="table">
                            <thead>
                                <tr>
                                    <td>Product Name</td>
                                    <td>Category Name</td>
                                    <td>Vendor</td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($sale->transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->product->title}}</td>
                                <td>{{ $transaction->category->name}}</td>
                                <td>{{ $transaction->vendor->name}}</td>
                            </tr>
                            @endforeach
                            </table>
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