@extends('layouts.base')


@section('content-base')

<div>
    {{-- corousel --}}
    @include('components.titlebar', ["title" => "Profile"])

    {{-- content --}}
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center">
            <div class="content-box h-100 w-100 p-4 m-4">
                {{-- <div class="box-content-header">
                    <h3>Taksir TOL</h3>
                    <hr class="color-yellow">
                </div> --}}
                <div class="box-content-wrapper d-flex flex-row justify-content-center">
                    <div class="content-left mx-4 m-1 w-50">
                        <h4 class="font-weight-bold">Profile</h4>
                        <img class="rounded w-50 my-3 img-fluid" src="{{ asset('assets/images/profile/jimmy.jpg') }}">
                        <div class="input-box-wrapper my-3">
                            <h6>Nama Lengkap</h6>
                            <input type="text" class="input-box-text text-left" value="Jimmy Neutron" name="" id="">
                        </div>
                        <div class="input-box-wrapper my-3">
                            <h6>Alamat Lengkap</h6>
                            <textarea class="input-box-text text-left" rows="3">Perum Kota Permata Blok B3.NO 7,CIsereuh Purwakarta, Jawa Barat
                            </textarea>
                        </div>
                        <div class="input-box-wrapper my-3">
                            <h6>Nomor Telephone</h6>
                            <input type="text" class="input-box-text text-left" value="082115593609" name="" id="">
                        </div>
                        <div class="input-box-wrapper my-3">
                            <h6>Email</h6>
                            <input type="text" class="input-box-text text-left" value="jimron@gmail.com" name="" id="">
                        </div>
                    </div>
                    {{-- <div>
                        <div class="color-yellow vertical-line mx-5"></div>
                    </div> --}}
                    <div class="content-right mx-4 w-50">
                        <div class="content-right-one d-flex flex-column">
                            <h4 class="font-weight-bold">Detail Kartu</h4>
                            <img class="rounded w-75 my-3 img-fluid" src="{{ asset('assets/images/card-toll.jpg') }}">
                            <div class="input-box-wrapper my-2">
                                <h6>Nama Pemilik</h6>
                                <input type="text" class="input-box-text text-left" value="Jimmy Neutron" name="" id="">
                            </div>
                            <div class="input-box-wrapper my-2">
                                <h6>Nomor Kartu</h6>
                                <input type="text" class="input-box-text text-left"
                                    value="1234&nbsp;5678&nbsp;9098&nbsp;7654" name="" id="">
                            </div>
                            <div class="d-flex flex-row">
                                <div class="input-box-wrapper my-2 mx-1">
                                    <h6>Saldo</h6>
                                    <input type="text" class="input-box-text text-left" value="Rp. 1.000.000" name=""
                                        id="">
                                </div>
                                <div class="input-box-wrapper my-2 mx-1">
                                    <h6>Golongan</h6>
                                    <select class="input-box-text">
                                        <option selected value="1">1 (Satu)</option>
                                        <option value="2">2 (Dua)</option>
                                        <option value="3">3 (Tiga)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection