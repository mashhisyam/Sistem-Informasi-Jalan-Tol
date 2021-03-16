@extends('layouts.base')


@section('content-base')

<div>
    {{-- corousel --}}
    @include('components.carousel')

    {{-- content --}}
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center">
        <h2>Features</h2>
        <div class="features-row m-2 d-flex flex-row">
            <a href="{{url('beritatol')}}" class="feature-item my-2 mx-4 d-flex flex-column align-items-center">
                <div class="feature-circle-item mb-3 flex-center-items">
                    <img src="{{ asset('assets/images/icon-news.png') }}" alt="" srcset="">
                </div>
                <h4>Berita Tol</h4>
            </a>
            <a href="{{url('taksirtol')}}" class="feature-item my-2 mx-4 d-flex flex-column align-items-center">
                <div class="feature-circle-item mb-3 flex-center-items">
                    <img src="{{ asset('assets/images/icon-money.png') }}" alt="" srcset="">
                </div>
                <h4>Tarif Tol</h4>
            </a>
        </div>
    </div>
</div>

@endsection