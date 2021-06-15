@extends('layouts.base')


@section('content-base')

<div style="margin: 0;">

    {{-- content --}}
    <div class="container-fluid" style="padding: 20px;">
        <h2 class="color-bluedark font-weight-bold">Berita Tol</h2>
        <hr class="colorhr-bluedark">
        <div class="news-content-wrapper d-flex justify-content-center rounded p-4">
            <div class="news-content d-flex flex-column w-75 p-3" style="height: fit-content;">
                <div class="container-fluid">                    
                    <h3>{{__($newsdata->title)}}</h3>
                    <hr class="colorhr-bluedark">
                    <p>{{__($newsdata->created_at)}}</p>

                    <img class="rounded mx-auto d-block" src="{{ asset($newsdata->poster) }}"
                        style="width: 650px; height: 500px">

                    <div class="news-detail text-justify" style="margin: 10px;">
                        {!!$newsdata->content!!}
                    </div>
                </div>

            </div>
            <div>
                <div style="width: 0.2rem;" class="colorhr-bluedark vertical-line mx-3"></div>
            </div>
            <div class="d-flex flex-column w-25 py-5">
                <div>
                    <h5 class="font-main">Related News</h5>
                    <hr class="colorhr-bluedark">
                </div>
                @foreach ($releted as $itemrelete)
                <div class="highlight-news-item d-flex flex-wrap flex-row my-2 p-2 rounded" style="cursor: pointer"
                    onclick="location.href='{{route('shownews', ['id' => $itemrelete->id])}}'">
                    <h3>{{__($itemrelete->title)}}</h3>
                    <div class="d-flex flex-row">
                        <img class="rounded img-fluid news-image-highlight mr-2 mt-2"
                            src="{{ asset($itemrelete->poster) }}">
                        <span
                            style="font-size: 0.8rem">{!!\Illuminate\Support\Str::limit($itemrelete->content,150)!!}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection