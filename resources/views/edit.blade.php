@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit
                        <a href="{{ url('dashbord') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update/'.$menu->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        

                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" name="name" value="{{$menu->name}}" required>
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" value="" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description" required value="{{$menu->description}}">
                        </div>
                        <div class="form-group">
                            <label>price</label>
                            <input type="text" class="form-control" name="price" required value="{{$menu->price}}">
                        </div>
                        <button type="submit">update</button>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>

@endsection