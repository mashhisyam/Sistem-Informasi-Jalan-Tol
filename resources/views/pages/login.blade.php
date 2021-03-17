@extends('layouts.app')

@section('title')
Login
@endsection

@section('content')
<div class="w-100 h-100 d-flex bg-login position-fixed">
    <div class="container-fluid wrapper-flex-center p-3 clearfix">
        <img src="{{ asset('assets/images/app-logo.png') }}" class="img-fluid w-25" alt="" srcset="">
        <span class="title-logo mb-5">Sistem Informasi Jalan Tol</span>


        <div class="my-5 w-50 wrapper-flex-center">
            <div class="input-box-line d-flex flex-column w-50">
                <span>Username</span>
                <input type="text" name="" id="">
            </div>
            <div class="input-box-line d-flex flex-column w-50">
                <span>Password</span>
                <input type="password" name="" id="">
            </div>
            <div class="p-4">
                <button type="button" class="btn btn-primary mx-2">Login</button>
                <button type="button" class="btn btn-primary mx-2">Register</button>
            </div>
        </div>
        <p></p>
    </div>
</div>
@endsection