@extends('layouts.base')


@section('content-base')

<div>
    {{-- corousel --}}
    @include('components.titlebar', ["title" => "Berita Tol"])
    <div class="my-2"></div>
    @include('components.carousel')

    {{-- content --}}
    <div class="container-fluid my-3">
        <h2 class="color-bluedark font-weight-bold">Berita Tol</h2>
        <hr class="colorhr-bluedark">


        <div class="filter-content m-2">
            <section class="d-flex flex-wrap justify-content-center">

                <ul class="content-item rounded">
                    <a class="d-flex" href="/beritatol/1">
                        <img class="rounded img-fluid" src="{{ asset('assets/images/article/jasamarga-surabaya.jpg') }}">
                        <div class="p-2">
                            <p class="font-weight-bold mb-2">Jasa Marga Telah Selesaikan Perbaikan di Jalan Tol
                                Jakarta-Cikampek Km 39 Arah Jakarta</p>
                            <hr class="colorhr-bluedark mb-1">
                            <p class="content-highlight text-justify">Jakarta (08/02) - Sehubungan dengan informasi yang
                                beredar
                                terkait jalan berlubang di Jalan Tol Jakarta-Cikampek tepatnya di KM 39+350 arah Jakarta
                                yang
                                menyebabkan bocornya ban beberapa kendaraan pada Minggu (07/02), kami akui
                                kejadian tersebut benar adanya dan kami mohon maaf atas kejadian dimaksud.</p>
                        </div>
                    </a>
                </ul>

                <ul class="content-item rounded">
                    <a class="d-flex" href="http://">
                        <img class="rounded img-fluid" src="{{ asset('assets/images/article/jasamarga-surabaya.jpg') }}">
                        <div class="p-2">
                            <p class="font-weight-bold mb-2">Jasa Marga Telah Selesaikan Perbaikan di Jalan Tol
                                Jakarta-Cikampek Km 39 Arah Jakarta</p>
                            <hr class="colorhr-bluedark mb-1">
                            <p class="content-highlight text-justify">Jakarta (08/02) - Sehubungan dengan informasi yang
                                beredar
                                terkait jalan berlubang di Jalan Tol Jakarta-Cikampek tepatnya di KM 39+350 arah Jakarta
                                yang
                                menyebabkan bocornya ban beberapa kendaraan pada Minggu (07/02), kami akui
                                kejadian tersebut benar adanya dan kami mohon maaf atas kejadian dimaksud.</p>
                        </div>
                    </a>
                </ul>
                <ul class="content-item rounded">
                    <a class="d-flex" href="http://">
                        <img class="rounded img-fluid" src="{{ asset('assets/images/article/jasamarga-surabaya.jpg') }}">
                        <div class="p-2">
                            <p class="font-weight-bold mb-2">Jasa Marga Telah Selesaikan Perbaikan di Jalan Tol
                                Jakarta-Cikampek Km 39 Arah Jakarta</p>
                            <hr class="colorhr-bluedark mb-1">
                            <p class="content-highlight text-justify">Jakarta (08/02) - Sehubungan dengan informasi yang
                                beredar
                                terkait jalan berlubang di Jalan Tol Jakarta-Cikampek tepatnya di KM 39+350 arah Jakarta
                                yang
                                menyebabkan bocornya ban beberapa kendaraan pada Minggu (07/02), kami akui
                                kejadian tersebut benar adanya dan kami mohon maaf atas kejadian dimaksud.</p>
                        </div>
                    </a>
                </ul>
                <ul class="content-item rounded">
                    <a class="d-flex" href="http://">
                        <img class="rounded img-fluid" src="{{ asset('assets/images/article/jasamarga-surabaya.jpg') }}">
                        <div class="p-2">
                            <p class="font-weight-bold mb-2">Jasa Marga Telah Selesaikan Perbaikan di Jalan Tol
                                Jakarta-Cikampek Km 39 Arah Jakarta</p>
                            <hr class="colorhr-bluedark mb-1">
                            <p class="content-highlight text-justify">Jakarta (08/02) - Sehubungan dengan informasi yang
                                beredar
                                terkait jalan berlubang di Jalan Tol Jakarta-Cikampek tepatnya di KM 39+350 arah Jakarta
                                yang
                                menyebabkan bocornya ban beberapa kendaraan pada Minggu (07/02), kami akui
                                kejadian tersebut benar adanya dan kami mohon maaf atas kejadian dimaksud.</p>
                        </div>
                    </a>
                </ul>

            </section>
        </div>
    </div>
</div>

@endsection