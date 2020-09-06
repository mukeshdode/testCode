
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin {{ __('Dashboard') }}</div>

                <div class="card-body">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <h1 class="display-3">Add a contact</h1>
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
                        <form method="post" action="{{ route('admin.vendor.submit') }}">
                            @csrf
                            <div class="form-group">    
                                <label for="Name"> Name:</label>
                                <input type="text" class="form-control" name="name"/>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" name="email"/>
                            </div>
                            <div class="form-group">
                                <label for="country">Password:</label>
                                <input type="text" class="form-control" name="password"/>
                            </div>    
                            <button type="submit" class="btn btn-primary">Add Vendor</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

