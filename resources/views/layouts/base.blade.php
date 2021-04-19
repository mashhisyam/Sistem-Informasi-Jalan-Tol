@extends('layouts.app')

@section('title')
@yield('title', "Sistem Informasi Jalan Tol")
@endsection

@section('content')
{{-- header --}}
@include('components.header')

{{-- content --}}
@yield('content-base')

{{-- footer --}}
@include('components.footer')

@endsection