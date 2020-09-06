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
                        <h1 class="display-3">Vendors</h1>    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Email</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vendors as $vendor)
                            <tr>
                                <td>{{$vendor->id}}</td>
                                <td>{{$vendor->name}}</td>
                                <td>{{$vendor->email}}</td>
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