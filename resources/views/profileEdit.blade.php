
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <div class="card-body">
                  <form action="{{ route('UpdateProfile') }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label> Name</label>
                            <input type="text" class="form-control" name="name" value="{{$profile->name}}" >
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email"  value="{{$profile->email}}">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" name="password"  >
                        </div>
                        <button type="submit">update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection















