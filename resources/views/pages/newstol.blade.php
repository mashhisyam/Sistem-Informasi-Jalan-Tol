@extends('layouts.base')


@section('content-base')

<div>
    {{-- corousel --}}
    {{-- @include('components.titlebar', ["title" => "Berita Tol"])
    <div class="my-2"></div> --}}
    @include('components.carousel')

    {{-- content --}}
    <div class="m-3">
        <h2 class="color-bluedark font-weight-bold">Berita Tol</h2>
        <hr class="colorhr-bluedark">


        <div class="filter-content m-2">
            <ol class="d-flex flex-wrap ">

                @foreach ($newsDatas as $item)

                <ul class="content-item rounded p-2">
                    <a href="{{route('shownews', ['id' => $item->id])}}">
                        <div class="d-flex align-items-stretch ">
                            <img class="rounded w-50 img-fluid" src="{!!asset($item->poster)!!}">
                            <div class="mx-2">
                                <p class="mb-1"><strong>{!!$item->title!!}</strong></p>
                                <hr class="colorhr-bluedark mb-1">
                                <span
                                    style="font-size: 0.8rem">{!!\Illuminate\Support\Str::limit($item->content,120)!!}</span>
                            </div>
                        </div>
                    </a>
                </ul>
                @endforeach
                <div class="btn-submit-wrapper d-flex justify-content-center">
                    <a href="#" class="btn btn-yellow">Tambah Berita</a>
                </div>
                
            </ol>
        </div>
    </div>
</div>

@endsection