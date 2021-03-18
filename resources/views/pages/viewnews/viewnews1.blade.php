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
                    <h3>Jasa Marga Telah Selesaikan Perbaikan di Jalan Tol Jakarta-Cikampek Km 39 Arah Jakarta</h3>
                    <hr class="colorhr-bluedark">
                    <p>2/10/2021 7:18:07 AM</p>

                    <img class="rounded mx-auto d-block" src="{{ asset('assets/images/article/cikampek-km39.jpeg') }}" style="width: 650px; height: 500px">

                    <div class="news-detail text-justify" style="margin: 10px;">
                        <strong>Jakarta (08/02)</strong> - Sehubungan dengan informasi yang beredar terkait jalan
                        berlubang di Jalan Tol
                        Jakarta-Cikampek tepatnya di KM 39+350 arah Jakarta yang menyebabkan bocornya ban beberapa
                        kendaraan pada Minggu
                        (07/02), kami akui kejadian tersebut benar adanya dan kami mohon maaf atas kejadian
                        dimaksud.<br>
                        General Manager Representative Office 1 Jasamarga Transjawa Tollroad Regional Division
                        Widiyatmiko Nursejati
                        mengatakan bahwa perbaikan lubang di lokasi tersebut langsung dilaksanakan di malam tersebut
                        dan telah selesai sejak
                        pukul 01.00 WIB dini hari tadi.<br><br>
                        &ldquo;Untuk beberapa kendaraan yang mengalami bocor ban akibat lubang kemarin, saat ini
                        tengah kami proses klaim
                        ganti ruginya, sesuai ketentuan yang berlaku di perusahaan,&rdquo; tambah Miko. <br><br>
                        Saat ini, Jasa Marga secara terus menerus melakukan perbaikan perkerasan jalan tol secara rutin. <br>
                        Jasa Marga memohon maaf atas ketidaknyamanan yang dialami oleh pengguna jalan. Kami mengimbau pengguna jalan untuk mengantisipasi perjalanan sebelum memasuki jalan tol,
                        tetap berhati-hati dan menaati rambu-rambu terutama di sekitar lokasi pekerjaan. Persiapkan diri dengan baik dan pastikan kendaraan anda dalam kondisi prima, serta selalu patuhi protokol kesehatan. </p>
                    </div>
                </div>

            </div>
            <div>
                <div style="width: 0.2rem; height:100pc" class="colorhr-bluedark vertical-line mx-3"></div>
            </div>
            <div class="d-flex flex-column w-25 py-5">
                <div>
                    <h5 class="font-main">Related News</h5>
                    <hr class="colorhr-bluedark">
                </div>
                <div class="highlight-news-item d-flex flex-column my-2">
                    <a href="/beritatol/3">
                        <h3>Jasamarga Metropolitan Tollroad Regional Division Langsungkan Acara Serah Terima Pejabat Struktural</h3>
                        <div class="d-flex flex-row">
                            <img class="rounded img-fluid news-image-highlight mr-2 mt-2" src="{{ asset('assets/images/article/miles-tandatangan.jpg') }}">
                            <p>Jasamarga Metropolitan Tollroad Regional Division (JMT)
                                melangsungkan acara serah terima jabatan General Manager Representative Office 1 dan
                                Transaction Management Section Head, Senin (14/12).
                            </p>
                        </div>
                    </a>
                </div>
                <div class="highlight-news-item d-flex flex-column my-2">
                    <a href="/beritatol/2">
                        <h3>PT Jasanarga Surabaya Mojokereto Bersama JMTO Ruas Surabaya Mojokereto Gelar Apel Persiapan Nataru</h3>
                        <div class="d-flex flex-row">
                            <img class="rounded img-fluid news-image-highlight mr-2 mt-2" src="{{ asset('assets/images/article/jasamarga-surabaya.jpg') }}">
                            <p>Gerbang Tol (GT) Warugunung menjadi lokasi kegiatan Apel Pagi PT Jasamarga Surabaya Mojokerto bersama PT Jasamarga Tollroad Operator (
                                JMTO) Ruas Surabaya Mojokerto dalam persiapan jelang libur panjang Natal 2020 dan Tahun Baru 2021 (Nataru), Selasa (8/12).

                                Hadir sebagai Komandan Upacara General Manager (GM) Teknik dan Operasi PT JSM Irwansyah. Turut hadir Area Manager JMTO ruas Surabaya Mojokerto Manyuk Irwan D,
                                para karyawan JSM serta JMTO Ruas Surabaya Mojokerto.</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection