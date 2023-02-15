@extends('layouts.app')
@section('content')
<div  class="d-flex justify-content-center">
<div class=" shadow w-50 p-4  ">
    <h3  class="d-flex justify-content-center ">Profile</h3>
        <div class="mb-3 d-flex justify-content-center ">
          <label class="form-label" >name:{{$profile->name}}</label>
        </div>
        <div class="mb-3 d-flex justify-content-center">
          <label  class="form-label">Email: {{$profile->email}}</label>
        </div>
        <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary btn-sm mx-2 "><a  class="text-white text-decoration-none" href="{{ url('edit',$profile->id) }}">Edit Profile</a></button>


</div>
</div>
</div>

@endsection