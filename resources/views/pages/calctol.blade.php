@extends('layouts.base')


@section('content-base')

<div>
    {{-- carousel --}}
    @include('components.titlebar', ["title" => "Taksir Biaya Tol", 'poster' => "assets/images/title-bar-bg-2.jpg"])

    {{-- content --}}
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center">
            <div class="content-box h-100 w-100 p-4 m-4">
                <div class="box-content-header">
                    <h3>Taksir TOL</h3>
                    <hr class="color-yellow">
                </div>
                <div class="box-content-wrapper d-flex flex-row justify-content-center">
                    <div class="content-left d-flex align-items-center @if($routedata == null) p-5  @endif m-1 w-25">
                        <form action="{{route('taksirtol')}}" method="post">
                            @csrf
                            <div class="input-box-wrapper my-3">
                                <label>Rute</label>
                                <select class="input-box-text p-2" name="rute" id="rute">
                                    {{-- <option selected value="null">Pilih rute yang disediakan</option> --}}
                                    @foreach ($routelist as $item)

                                    <option @if ($item->id == old('rute') || $routedata != null && $routedata->id ==
                                        $item->id)selected @endif
                                        value="{{__($item->id)}}">
                                        {{__($item->rute)}}
                                    </option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="btn-submit-wrapper d-flex justify-content-center">
                                <button type="submit" class="btn btn-yellow">Taksir</button>
                            </div>
                        </form>
                    </div>

                    @if ($routedata != null)

                    <div>
                        <div class="color-yellow vertical-line mx-5"></div>
                    </div>
                    <div class="content-right w-50 d-flex flex-column align-items-center">
                        <div class="d-flex w-75">
                            <div class="p-2 w-100">
                                <span>Gerbang Masuk</span>
                                <div class="input-box-text">
                                    <span>{{__($routename['asal'])}}</span>
                                </div>
                            </div>
                            <div class="p-2 w-100">
                                <span>Gerbang Keluar</span>
                                <div class="input-box-text">
                                    <span>{{__($routename['tujuan'])}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap w-75">
                            <div class="p-2 w-100">
                                <span>Golongan 1</span>
                                <div class="input-box-text">
                                    <span>Rp. {{__(number_format($routedata->gol1, 2, ',', '.'))}}</span>
                                </div>
                            </div>
                            <div class="p-2 w-100">
                                <span>Golongan 2</span>
                                <div class="input-box-text">
                                    <span>Rp. {{__(number_format($routedata->gol2, 2, ',', '.'))}}</span>
                                </div>
                            </div>
                            <div class="p-2 w-100">
                                <span>Golongan 3</span>
                                <div class="input-box-text">
                                    <span>Rp. {{__(number_format($routedata->gol3, 2, ',', '.'))}}</span>
                                </div>
                            </div>
                            <div class="p-2 w-100">
                                <span>Golongan 4</span>
                                <div class="input-box-text">
                                    <span>Rp. {{__(number_format($routedata->gol4, 2, ',', '.'))}}</span>
                                </div>
                            </div>
                            <div class="p-2 w-100">
                                <span>Golongan 5</span>
                                <div class="input-box-text">
                                    <span>Rp. {{__(number_format($routedata->gol5, 2, ',', '.'))}}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection