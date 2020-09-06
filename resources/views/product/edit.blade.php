
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">vendor {{ __('Dashboard') }}</div>

                <div class="card-body">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <h1 class="display-3">Edit Product</h1>
                    <div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                        @endif
                        <form method="post" action="{{ route('vendor.products.edit.submit', $product->id) }}">
                            @csrf
                            <div class="form-group">    
                                <label for="title"> Title:</label>
                                <input type="text" class="form-control" name="title" value="{{ $product->title }}"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <input type="text" class="form-control" name="description" value="{{ $product->description }}"/>
                            </div>
                            <div class="form-group">
                                <label for="tax">Tax:</label>
                                <select name="tax" class="form-control">
                                @foreach ($taxes as $tax)
                                <option value="{{ $tax->id}}" {{ $product->tax_id == $tax->id ? 'selected' : '' }} >{{ $tax->name}}</option>
                                @endforeach
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="cost_price">Cost Price:</label>
                                <input type="number" class="form-control" name="cost_price" value="{{ $product->cost_price }}"/>
                            </div>    
                            <div class="form-group">
                                <label for="delivery_cost">Delivery Price:</label>
                                <input type="number" class="form-control" name="delivery_cost" value="{{ $product->delivery_cost }}"/>
                            </div>    
                            <button type="submit" class="btn btn-primary">Edit Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

