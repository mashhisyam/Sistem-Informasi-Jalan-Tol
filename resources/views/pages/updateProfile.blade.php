@extends('layouts.base')


@section('content-base')

<div>
    {{-- corousel --}}
    @include('components.titlebar', ["title" => "Edit Profile", 'poster' => "assets/images/title-bar-bg-2.jpg"])

    {{-- content --}}
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center">
            <div class="content-box h-100 w-100 p-4 m-4">                                        
                        <form action="{{url ('update-profile',$profile->id)}}" class="content-right mx-4 m-1 w-50" method="POST">
                            {{csrf_field()}}
                            
                            <div class="content-left mx-4 m-1 w-50">                        
                                <h4 class="font-weight-bold">Edit Profile</h4>
                                {{-- <img class="rounded w-50 my-3 img-fluid" src="{{ asset('assets/images/profile/jimmy.jpg') }}"> --}}
                                <div class="input-box-wrapper my-3">
                                    <h6>Nama Lengkap</h6>
                                    <input type="text" class="input-box-text text-left" value="{{__($profile->fullname)}}"
                                        name="fullname" id="fullname">
                                </div>
                                <div class="input-box-wrapper my-3">
                                    <h6>Alamat Lengkap</h6>
                                    <textarea name="address" id="address" class="input-box-text text-left" rows="3">{{__($profile->address)}}</textarea>
                                </div>                                                                                         
                            <div class="form-group mb-3" style="right: 5cm">
                                <h6>Nomor Telephone</h6>
                                    <input type="text" class="input-box-text text-left" value="{{__($profile->phonenumber)}}"
                                        name="phonenumber" id="phonenumber">
                            </div>
                            <div class="form-group mb-3">
                                <h6>Email</h6>
                                    <input type="text" class="input-box-text text-left" value="{{__($profile->email)}}" name="email"
                                    id="email">
                            </div>                                    
                            <h1 class="pull-right">                                
                                <button type="submit" class="btn btn-primary btn-yellow">Save Profile</button>                            
                                </h1>                    
                            </div>                                                                                           
                        </form>                                                   
            </div>
        </div>
    </div>
    @endsection