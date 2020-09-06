

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
                        <h1 class="display-3">Categorie</h1>    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Slug</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
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


