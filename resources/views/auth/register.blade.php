@extends('layouts.app')

@section('content')

    <style>
        *{
            background:rgb(238, 234, 235);
        }
    </style>
    <div class="container">
    <div class="d-flex justify-content-center">
        <div class="">
            <div class="shadow  d-flex align-items-center" style="color:rgb(240, 201, 41) "> <img src="./images/33.jpg" class=" shadow d-block " alt="...">
            </div>
        </div>
            <div class="shadow  p-4">
                <div class="card-header"  style="color:rgb(240, 201, 41) ">{{ __('Register') }}</div>

                <div class=" w-100">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="  w-100  mb-3">
                            <label for="name" class="  form-label text-md-end">{{ __('Name') }}</label>

                            <div class="">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <label for="email" class="form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" mb-3">
                            <label for="password-confirm" class="form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class=" mb-0">
                            <div class="">
                                <button type="submit" class=" w-100 btn btn mb-4" style=" background:rgb(236, 203, 69) ">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        
    </div>
    </div>
    </div>
</div>
@endsection
