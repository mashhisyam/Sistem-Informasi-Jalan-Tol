@extends('layouts.base')


@section('content-base')

<div>
    {{-- carousel --}}
    @include('components.titlebar', ["title" => "Taksir Tol"])

    {{-- content --}}
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center">
            <div class="content-box h-100 w-100 p-4 m-4">
                <div class="box-content-header">
                    <h3>Taksir TOL</h3>
                    <hr class="color-yellow">
                </div>
                <div class="box-content-wrapper d-flex flex-row justify-content-center">
                    <div class="content-left m-1 w-25">
                        <div class="input-box-wrapper my-3">
                            <h6>Gerbang Masuk</h6>
                            <input type="text" class="input-box-text" name="" id="">
                        </div>
                        <div class="input-box-wrapper my-3">
                            <h6>Gerbang Keluar</h6>
                            <input type="text" class="input-box-text" name="" id="">
                        </div>
                        <div class="btn-submit-wrapper d-flex justify-content-center">
                            <button type="submit" class="btn btn-yellow">Taksir</button>
                        </div>
                    </div>
                    <div>
                        <div class="color-yellow vertical-line mx-5"></div>
                    </div>
                    <div class="content-right">
                        <div class="content-right-one d-flex flex-row">
                            <div class="content-one-left mx-4">
                                <div class="input-box-wrapper my-2">
                                    <h6>Gerbang Masuk</h6>
                                    <input type="text" class="input-box-text" name="" id="">
                                </div>
                                <div class="input-box-wrapper my-2">
                                    <h6>Golongan Kendaraan</h6>
                                    <input type="text" class="input-box-text" name="" id="">
                                </div>
                            </div>
                            <div class="content-one-right mx-4">
                                <div class="input-box-wrapper my-2">
                                    <h6>Gerbang Keluar</h6>
                                    <input type="text" class="input-box-text" name="" id="">
                                </div>
                                <div class="input-box-wrapper my-2">
                                    <h6>Jarak Tempuh</h6>
                                    <input type="text" class="input-box-text" name="" id="">
                                </div>
                            </div>
                        </div>
                        <div class="content-right-two d-flex flex-column align-items-center m-3">
                            <h5>Total Biaya</h5>
                            <p class="content-highlight-cost">
                                Rp.1.000.000
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection