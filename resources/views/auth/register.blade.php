@extends('layouts.app')

@section('title')
Register
@endsection

@section('content')
<div class="w-100 h-100 d-flex bg-login position-fixed">
    <div class="container-fluid wrapper-flex-center p-3 clearfix">
        <img src="{{ asset('assets/images/app-logo.png') }}" class="img-fluid w-25" alt="" srcset="">
        <span class="title-logo mb-5">
            <strong>Sistem Informasi Jalan Tol</strong>
        </span>


        <form class="w-50 wrapper-flex-center" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="input-box-line d-flex flex-row w-75">
                <div class="input-box-line d-flex flex-column px-2 w-50">
                    <label class="mb-1" for="fullname"><strong>{{ __('Nama Lengkap') }}</strong></label>
                    <input id="fullname" type="text" class="my-2 @error('fullname') is-invalid @enderror"
                        name="fullname" value="{{ old('fullname') }}" required autocomplete="name" autofocus>
                    @error('fullname')
                    <span style="color: red">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="input-box-line d-flex flex-column px-2 w-50">
                    <label class="mb-1" for="phonenumber"><strong>{{ __('Nomor Handphone') }}</strong></label>
                    <input id="phonenumber" type="number" class="my-2 @error('phonenumber') is-invalid @enderror"
                        name="phonenumber" value="{{ old('phonenumber') }}" required autocomplete="mobile" autofocus>
                    @error('phonenumber')
                    <span style="color: red">
                        {{$message}}
                    </span>
                    @enderror
                </div>
            </div>


            <div class="input-box-line d-flex flex-row w-75">
                <div class="input-box-line d-flex flex-column px-2 w-50">
                    <label class="mb-1" for="address"><strong>{{ __('Alamat') }}</strong></label>
                    <input id="address" type="text" class="my-2 @error('address') is-invalid @enderror" name="address"
                        value="{{ old('address') }}" required autocomplete="address" autofocus>
                    @error('address')
                    <span style="color: red">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="input-box-line d-flex flex-column px-2 w-50">
                    <label class="mb-1" for="email"><strong>{{ __('Email') }}</strong></label>
                    <input id="email" type="email" class="my-2 @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span style="color: red">
                        {{$message}}
                    </span>
                    @enderror
                </div>
            </div>

            <div class="input-box-line d-flex flex-column w-50">
                <label class="mb-1" for="password"><strong>{{ __('Password') }}</strong></label>
                <input id="password" type="password" class="my-2 @error('password') is-invalid @enderror"
                    name="password" value="{{ old('password') }}" required autocomplete="current-password">
                @error('password')
                <span style="color: red">
                    {{$message}}
                </span>
                @enderror
            </div>
            <div class="p-4">
                <button type="submit" class="btn btn-login mx-2">{{ __('Create Account') }}</button>
            </div>
        </form>
    </div>
</div>
@endsection