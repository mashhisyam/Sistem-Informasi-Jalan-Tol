<?php

namespace Database\Seeders;

use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NewsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert(
            [
                [
                    "title" => "Jasa Marga Telah Selesaikan Perbaikan di Jalan Tol Jakarta-Cikampek Km 39 Arah Jakarta",
                    "poster" => "assets/images/article/cikampek-km39.jpg",
                    "content" => '<p style="text-align: justify;"><strong>Jakarta (08/02)</strong> - Sehubungan dengan informasi yang beredar terkait jalan berlubang di Jalan TolJakarta-Cikampek tepatnya di KM 39+350 arah Jakarta yang menyebabkan bocornya ban beberapa kendaraan pada Minggu (07/02), kami akui kejadian tersebut benar adanya dan kami mohon maaf atas kejadian dimaksud. General Manager Representative Office 1 Jasamarga Transjawa Tollroad Regional Division Widiyatmiko Nursejati mengatakan bahwa perbaikan lubang di lokasi tersebut langsung dilaksanakan di malam tersebut dan telah selesai sejak pukul 01.00 WIB dini hari tadi.</p><p style="text-align: justify;"><br />&ldquo;Untuk beberapa kendaraan yang mengalami bocor ban akibat lubang kemarin, saat ini tengah kami proses klaim ganti ruginya, sesuai ketentuan yang berlaku di perusahaan,&rdquo; tambah Miko. <br /><br />Saat ini, Jasa Marga secara terus menerus melakukan perbaikan perkerasan jalan tol secara rutin. <br />Jasa Marga memohon maaf atas ketidaknyamanan yang dialami oleh pengguna jalan. Kami mengimbau pengguna jalan untuk mengantisipasi perjalanan sebelum memasuki jalan tol, tetap berhati-hati dan menaati rambu-rambu terutama di sekitar lokasi pekerjaan. Persiapkan diri dengan baik dan pastikan kendaraan anda dalam kondisi prima, serta selalu patuhi protokol kesehatan.</p>',
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ],
                [
                    "title" => "PT Jasanarga Surabaya Mojokereto Bersama JMTO Ruas Surabaya Mojokereto Gelar Apel Persiapan Nataru",
                    "poster" => "assets/images/article/jasamarga-surabaya.jpg",
                    "content" => '<p style="text-align: justify;"><strong>Jakarta (08/02)</strong> - Sehubungan dengan informasi yang beredar terkait jalan berlubang di Jalan Tol Jakarta-Cikampek tepatnya di KM 39+350 arah Jakarta yang menyebabkan bocornya ban beberapa kendaraan pada Minggu (07/02), kami akui kejadian tersebut benar adanya dan kami mohon maaf atas kejadian dimaksud.General Manager Representative Office 1 Jasamarga Transjawa Tollroad Regional Division Widiyatmiko Nursejati mengatakan bahwa perbaikan lubang di lokasi tersebut langsung dilaksanakan di malam tersebut dan telah selesai sejak pukul 01.00 WIB dini hari tadi.<br /><br />&ldquo;Untuk beberapa kendaraan yang mengalami bocor ban akibat lubang kemarin, saat ini tengah kami proses klaim ganti ruginya, sesuai ketentuan yang berlaku di perusahaan,&rdquo; tambah Miko. <br /><br />Saat ini, Jasa Marga secara terus menerus melakukan perbaikan perkerasan jalan tol secara rutin. Jasa Marga memohon maaf atas ketidaknyamanan yang dialami oleh pengguna jalan. Kami mengimbau pengguna jalan untuk mengantisipasi perjalanan sebelum memasuki jalan tol, tetap berhati-hati dan menaati rambu-rambu terutama di sekitar lokasi pekerjaan. Persiapkan diri dengan baik dan pastikan kendaraan anda dalam kondisi prima, serta selalu patuhi protokol kesehatan.</p>',
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ],
                [
                    "title" => "Jalan Tol Bogor Ring Road Seksi 3A Ruas Simpang Yasmin - Simpang Semplak Beroperasi Fungsional",
                    "poster" => "assets/images/article/tol-bekasi.jpg",
                    "content" => '<p style="text-align: justify;"><strong>Bogor (18/12)</strong> - Menjelang Hari Raya Natal dan Tahun Baru 2021,Jasa Marga melalui Anak Usahanya PT Marga Sarana Jabar (MSJ) akan mengoperasikan Jalan Tol Bogor Ring Road (BORR) Seksi 3A Ruas Simpang Yasmin - Simpang Semplak secara Fungsional pada tanggal 23 Desember 2020 sampai dengan 3 Januari 2021. Dioperasikannya jalur fungsional ini dapat menjadi jalur alternatif bagi pengguna jalan tol selain jalur nasional/arteri menuju wilayah Kota dan Kabupaten Bogor</p>',
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ],
                [
                    "title" => "Jasamarga Metropolitan Tollroad Regional Division Langsungkan Acara Serah Terima Pejabat Struktural",
                    "poster" => "assets/images/article/miles-tandatangan.jpg",
                    "content" => '<p style="text-align: justify;"><strong>Jakarta (14/2)</strong> - Jasamarga Metropolitan Tollroad Regional Division (JMT) melangsungkan acara serah terima jabatan General Manager Representative Office 1 dan Transaction Management Section Head, Senin (14/12). Untuk jabatan General Manager Representative Office 1 saat ini ditempati oleh Tri Wahyu Subekti, yang menggantikan posisi Oemi Vierta Moerdika. Sementara untuk posisi Transaction Management Section Head, saat ini ditempati oleh Ahmad Yanuar Hidayat guna menggantikan posisi Ricky Abdurrasyid Shiddiq.</p>',
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ]
            ]
        );
    }
}
