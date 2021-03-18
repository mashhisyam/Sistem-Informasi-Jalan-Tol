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
                        <img class="rounded img-fluid" src="{{ asset('assets/images/article/cikampek-km39.jpeg') }}">
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
                            <p class="font-weight-bold mb-2">PT Jasanarga Surabaya Mojokereto Bersama JMTO Ruas Surabaya Mojokereto Gelar Apel Persiapan Nataru</p>
                            <hr class="colorhr-bluedark mb-1">
                            <p class="content-highlight text-justify">Gerbang Tol (GT) Warugunung menjadi lokasi kegiatan Apel Pagi PT Jasamarga Surabaya Mojokerto bersama PT Jasamarga Tollroad Operator (
                                JMTO) Ruas Surabaya Mojokerto dalam persiapan jelang libur panjang Natal 2020 dan Tahun Baru 2021 (Nataru), Selasa (8/12).

                                Hadir sebagai Komandan Upacara General Manager (GM) Teknik dan Operasi PT JSM Irwansyah. Turut hadir Area Manager JMTO ruas Surabaya Mojokerto Manyuk Irwan D,
                                para karyawan JSM serta JMTO Ruas Surabaya Mojokerto.</p>
                        </div>
                    </a>
                </ul>
                <ul class="content-item rounded">
                    <a class="d-flex" href="http://">
                        <img class="rounded img-fluid" src="{{ asset('assets/images/article/tol-bekasi.jpg') }}">
                        <div class="p-2">
                            <p class="font-weight-bold mb-2">Jalan Tol Bogor Ring Road Seksi 3A Ruas Simpang Yasmin - Simpang Semplak Beroperasi Fungsional</p>
                            <hr class="colorhr-bluedark mb-1">
                            <p class="content-highlight text-justify">Bogor (18/12) - Menjelang Hari Raya Natal dan Tahun Baru 2021,
                                Jasa Marga melalui Anak Usahanya PT Marga Sarana Jabar (MSJ) akan mengoperasikan Jalan Tol Bogor Ring Road (BORR) Seksi 3A Ruas Simpang Yasmin - Simpang Semplak secara Fungsional pada tanggal 23 Desember 2020 sampai dengan 3 Januari 2021.
                                Dioperasikannya jalur fungsional ini dapat menjadi jalur alternatif bagi pengguna jalan tol selain jalur nasional/arteri menuju wilayah Kota dan Kabupaten Bogor.
                            </p>
                        </div>
                    </a>
                </ul>
                <ul class="content-item rounded">
                    <a class="d-flex" href="http://">
                        <img class="rounded img-fluid" src="{{ asset('assets/images/article/miles-tandatangan.jpg') }}">
                        <div class="p-2">
                            <p class="font-weight-bold mb-2">Jasamarga Metropolitan Tollroad Regional Division Langsungkan Acara Serah Terima Pejabat Struktural</p>
                            <hr class="colorhr-bluedark mb-1">
                            <p class="content-highlight text-justify">Jasamarga Metropolitan Tollroad Regional Division (JMT) melangsungkan acara serah terima jabatan General Manager Representative Office 1 dan Transaction Management Section Head, Senin (14/12).

                                Untuk jabatan General Manager Representative Office 1 saat ini ditempati oleh Tri Wahyu Subekti, yang menggantikan posisi Oemi Vierta Moerdika. Sementara untuk posisi Transaction Management Section Head,
                                saat ini ditempati oleh Ahmad Yanuar Hidayat guna menggantikan posisi Ricky Abdurrasyid Shiddiq.</p>
                        </div>
                    </a>
                </ul>

            </section>
        </div>
    </div>
</div>

@endsection