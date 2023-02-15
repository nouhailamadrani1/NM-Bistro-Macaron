@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <div class="card">
                <div class="card-header" style="color:rgb(7, 110, 136)">
                    <h4>Add Menu
                        <a href="{{ url('dashbord') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
<form action="/product" class="card m-4 p-3" method="post" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label>Product Name</label>
        <input type="text" class="form-control" name="name" >
        <span class="text-danger fw-bold">@error('name')
            {{$message}}
        @enderror</span>
    </div>
    <div class="form-group">
        <input type="file" name="image" >
        <span class="text-danger border-bottom">@error('name')
            {{$message}}
        @enderror</span>
    </div>
    <div class="form-group">
        <label>Description</label>
        <input type="text" class="form-control" name="description" >
        <span class="text-danger fw-bold">@error('description')
            {{$message}}
        @enderror</span>
    </div>
    <div class="form-group">
        <label>price</label>
        <input type="text" class="form-control" name="price" >
        <span class="text-danger fw-bold">@error('price')
            {{$message}}
        @enderror</span>
    </div>
    <button type="submit" class="text-white btn m-3" style="background:rgb(7, 110, 136); color:white">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection