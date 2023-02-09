@extends('layouts.app')

@section('content')
<style>
    *{
        background:rgb(238, 234, 235);
    }
</style>

<div class="container  ">
    <div class="d-flex justify-content-center ">
        <div class="shadow p-1 d-flex align-items-center"> <img src="./images/33.jpg" class=" shadow d-block " alt="..." style=" width:100%;
            height:300px;"></div>
        <div class="">
            <div class="shadow p-4 ">
                <div class=" text-center pb-3"><h4 style="color:rgb(240, 201, 41) ">Login</h4></div>

                <div class=" w-100  ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class=" w-100 mb-3 ">
                            <label for="email" class="form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" mb-3">
                            <label for="password" class="form-label text-md-end">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       

                        <div class="mb-5 " >
                            <div class=" ">
                                <button type="submit" class=" w-100 btn btn mb-4" style=" background:rgb(236, 203, 69) ">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-success text-decoration-none" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
