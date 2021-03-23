@extends('layouts.app')

@section('title')
Login
@endsection

@section('content')
<div class="w-100 h-100 d-flex bg-login position-fixed">
    <div class="container-fluid wrapper-flex-center p-3 clearfix">
        <img src="{{ asset('assets/images/app-logo.png') }}" class="img-fluid w-25" alt="" srcset="">
        <span class="title-logo mb-5"><strong>Sistem Informasi Jalan Tol</strong></span>

        <form class="my-5 w-50 wrapper-flex-center" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="input-box-line d-flex flex-column w-50">
                <label class="mb-1" for="email"><strong>{{ __('Email') }}</strong></label>
                <input id="email" type="text" class="my-2 @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span style="color: red">
                    {{$message}}
                </span>
                @enderror
            </div>
            <div class="input-box-line d-flex flex-column w-50">
                <label for="password"><strong>{{ __('Password') }}</strong></label>
                <input id="password" type="password" class="my-2 @error('password') is-invalid @enderror"
                    name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                @error('password')
                <span style="color: red">
                    {{$message}}
                </span>
                @enderror
            </div>
            <div class="p-4">
                <button type="submit" class="btn btn-login mx-2">{{ __('Login') }}</button>
                <button type="button" class="btn btn-register mx-2">
                    <a style="color: white" href="{{ route('register') }}">{{__('Register')}}</a>
                </button>
            </div>
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        </form>
    </div>
</div>
@endsection