@extends('layouts.base')


@section('content-base')

<div>

    {{-- content --}}
    <div class="container-fluid my-3">
        <h2 class="color-bluedark font-weight-bold">Berita Tol</h2>
        <hr class="colorhr-bluedark">
        <div class="news-content-wrapper d-flex justify-content-center rounded p-4">
            <div class="news-content d-flex flex-column w-75 p-3">
                <div>
                    <h3>Jasa Marga Telah Selesaikan Perbaikan di Jalan Tol
                        Jakarta-Cikampek Km 39 Arah Jakarta</h3>
                    <hr class="colorhr-bluedark">
                    <p>2/10/2021 7:18:07 AM</p>
                    <img class="rounded img-fluid" src="{{ asset('assets/images/article/jasamarga-surabaya.jpg') }}">
                    <div class="news-detail text-justify">
                        <p><strong>Jakarta (08/02)</strong> - Sehubungan dengan informasi yang beredar terkait jalan
                            berlubang di Jalan Tol
                            Jakarta-Cikampek tepatnya di KM 39+350 arah Jakarta yang menyebabkan bocornya ban beberapa
                            kendaraan pada Minggu
                            (07/02), kami akui kejadian tersebut benar adanya dan kami mohon maaf atas kejadian
                            dimaksud.</p>
                        <p>General Manager Representative Office 1 Jasamarga Transjawa Tollroad Regional Division
                            Widiyatmiko Nursejati
                            mengatakan bahwa perbaikan lubang di lokasi tersebut langsung dilaksanakan di malam tersebut
                            dan telah selesai sejak
                            pukul 01.00 WIB dini hari tadi.</p>
                        <p>&ldquo;Untuk beberapa kendaraan yang mengalami bocor ban akibat lubang kemarin, saat ini
                            tengah kami proses klaim
                            ganti ruginya, sesuai ketentuan yang berlaku di perusahaan,&rdquo; tambah Miko.</p>
                    </div>
                </div>

            </div>
            <div>
                <div style="width: 0.12rem" class="colorhr-bluedark vertical-line mx-3"></div>
            </div>
            <div class="d-flex flex-column w-25 py-5">
                <div>
                    <h5 class="font-main">Releted News</h5>
                    <hr class="colorhr-bluedark">
                </div>
                <div class="highlight-news-item d-flex flex-column my-2">
                    <a href="http://">
                        <h3>Jasa Marga Telah Selesaikan Perbaikan di
                            Jalan Tol Jakarta-Cikampek Km 39 Arah
                            Jakarta</h3>
                        <div class="d-flex flex-row">
                            <img class="rounded img-fluid news-image-highlight mr-2 mt-2"
                                src="{{ asset('assets/images/article/jasamarga-surabaya.jpg') }}">
                            <p>Jasamarga Metropolitan Tollroad
                                Regional Division (JMT)
                                melangsungkan acara serah
                                terima jabatan General Manager
                                Representative Office 1 dan
                                Transaction Management Section
                                Head, Senin (14/12).</p>
                        </div>
                    </a>
                </div>
                <div class="highlight-news-item d-flex flex-column my-2">
                    <a href="http://">
                        <h3>Jasa Marga Telah Selesaikan Perbaikan di
                            Jalan Tol Jakarta-Cikampek Km 39 Arah
                            Jakarta</h3>
                        <div class="d-flex flex-row">
                            <img class="rounded img-fluid news-image-highlight mr-2 mt-2"
                                src="{{ asset('assets/images/article/jasamarga-surabaya.jpg') }}">
                            <p>Jasamarga Metropolitan Tollroad
                                Regional Division (JMT)
                                melangsungkan acara serah
                                terima jabatan General Manager
                                Representative Office 1 dan
                                Transaction Management Section
                                Head, Senin (14/12).</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection