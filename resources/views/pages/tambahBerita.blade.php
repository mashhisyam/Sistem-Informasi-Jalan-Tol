@extends('layouts.base')


@section('content-base')

<div>
    {{-- corousel --}}
    @include('components.titlebar', ["title" => "Tambah Berita Baru", 'poster' => "assets/images/BeritaSatu.jpg"])

    {{-- content --}}
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center">
            <div class="content-box h-100 w-100 p-4 m-4">                                        
                <div class="row">
                    <div class="container">
                        <h2 class="text-center my-5">Upload Berita Terbaru</h2>
                        
                        <div class="col-lg-8 mx-auto my-5">	
             
                            @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                {{ $error }} <br/>
                                @endforeach
                            </div>
                            @endif
             
                            <form action="{{ url('simpan-berita') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
             
                                <div class="form-group">
                                    <b>File Gambar Berita</b><br/>
                                    <input type="file" name="poster" id="poster">
                                </div>
             
                                <div class="form-group">
                                    <b>Judul Berita</b>
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>

                                <div class="form-group">
                                    <b>Isi Berita</b>
                                    <textarea class="form-control" name="content" id="content" name="content"></textarea>
                                </div>
             
                                <input type="submit" value="Upload" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>                                                                   
            </div>
        </div>
    </div>
    @endsection