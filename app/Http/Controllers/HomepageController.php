<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{

    public function index(Request $request)
    {
        $devVisi = "Kabupaten Pasuruan yang Maju, Sejahtera dan Berkeadilan.";
        $devBannerUtama = collect([
            (object)[
                'id_banner' => 1,
                'nama_banner' => 'Potensi Alam',
                'url_youtube' => 'KBM3Ba9XDgA',
                'thumbnail' => "storage/uploads/hero/202206_196-62a2edf121cbc.jpg"
            ],
            (object)[
                'id_banner' => 2,
                'nama_banner' => 'Masjid Muhammad Cheng Ho',
                'url_youtube' => 'eg9zjHG2UsU',
                'thumbnail' => 'storage/uploads/hero/202402_206-65bc616742301.jpg'
            ],
            (object)[
                'id_banner' => 3,
                'nama_banner' => 'Kantor Bupati Pasuruan',
                'url_youtube' => 'CnnGQaFr_oE',
                'thumbnail' => 'storage/uploads/hero/202409_205-66d55924c94eb.jpg'
            ],
            (object)[
                'id_banner' => 4,
                'nama_banner' => 'Kaliandra',
                'url_youtube' => '3D8Rj-PBsRQ',
                'thumbnail' => 'storage/uploads/hero/202409_209-66d95f4f2b0ac.jpg'
            ],
        ]);

        $devSumberDaya = [
            // Data asli dari kamu
            (object)[
                'id' => 1,
                'name' => 'Transparansi',
                'imageUrl' => 'https://americansforprosperity.org/wp-content/uploads/2021/03/GettyImages-614037306-768x402.jpg',
                'url' => '/sumber-daya/transparansi'
            ],
            // Data baru dari HTML
            (object)[
                'id' => 2,
                'name' => 'Download',
                'imageUrl' => 'https://jlloveassociates.com/wp-content/uploads/2014/10/canstockphoto2214512.jpg',
                'url' => '/sumber-daya/download'
            ],
            (object)[
                'id' => 3,
                'name' => 'Agenda',
                'imageUrl' => 'https://images.unsplash.com/photo-1578625155481-7bc40a6481b6?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'url' => '/sumber-daya/agenda'
            ],
            (object)[
                'id' => 4,
                'name' => 'Majalah',
                'imageUrl' => 'https://colorlib.com/wp/wp-content/uploads/sites/2/Brochure-Catalog-Magazine-Mock-Up.png',
                'url' => '/sumber-daya/majalah'
            ],
        ];

        $devAplikasi = [
            (object) [
                "id_aplikasi" => 2,
                "nama_aplikasi" => "Buku Tamu Elektronik",
                "gambar_aplikasi" => "https://www.pasuruankab.go.id/download-file/2/app/gambar_aplikasi/0",
                "url_aplikasi" => "https://bukutamu.pasuruankab.go.id/booking",
                "created_by" => 8,
                "updated_by" => 8,
                "created_at" => "2025-04-11 20:53:36",
                "updated_at" => "2025-04-11 20:53:36",
                "deskripsi_aplikasi" => "Buku Tamu Online - Pemerintah Kabupaten Pasuruan...",
                "jenis_aplikasi" => "all",
                "mimes_gambar_aplikasi" => "image/png",
                "extension_gambar_aplikasi" => "png",
                "ori_name_gambar_aplikasi" => "logo-bukutamu.png"
            ],
            (object) [
                "id_aplikasi" => 3,
                "nama_aplikasi" => "Radio Suara Pasuruan",
                "gambar_aplikasi" => "https://www.pasuruankab.go.id/download-file/3/app/gambar_aplikasi/0",
                "url_aplikasi" => "https://radio.pasuruankab.go.id/",
                "created_by" => 8,
                "updated_by" => 8,
                "created_at" => "2025-04-11 21:02:33",
                "updated_at" => "2025-04-11 21:02:33",
                "deskripsi_aplikasi" => "Radio Online Resmi Kabupaten Pasuruan...",
                "jenis_aplikasi" => "all",
                "mimes_gambar_aplikasi" => "image/png",
                "extension_gambar_aplikasi" => "png",
                "ori_name_gambar_aplikasi" => "logo.png"
            ],
            (object) [
                "id_aplikasi" => 7,
                "nama_aplikasi" => "Panggilan Gawat Darurat",
                "gambar_aplikasi" => "https://www.pasuruankab.go.id/download-file/7/app/gambar_aplikasi/0",
                "url_aplikasi" => "tel:112",
                "created_by" => 8,
                "updated_by" => 8,
                "created_at" => "2025-04-12 07:30:33",
                "updated_at" => "2025-04-12 07:30:33",
                "deskripsi_aplikasi" => "Layanan Kebencanaan dan Kegawat Daruratan 112 Kabupaten Pasuruan...",
                "jenis_aplikasi" => "all",
                "mimes_gambar_aplikasi" => "image/png",
                "extension_gambar_aplikasi" => "png",
                "ori_name_gambar_aplikasi" => "logo112.png"
            ],
            (object) [
                "id_aplikasi" => 1,
                "nama_aplikasi" => "Layanan Teknologi Informatika",
                "gambar_aplikasi" => "https://www.pasuruankab.go.id/download-file/7/app/gambar_aplikasi/0",
                "url_aplikasi" => "https://sakti.pasuruankab.go.id/",
                "created_by" => 8,
                "updated_by" => 8,
                "created_at" => "2025-04-12 10:32:05",
                "updated_at" => "2025-04-12 10:32:05",
                "deskripsi_aplikasi" => "SAKTI (Sistem Aplikasi Konsultasi Teknologi Informatika)...",
                "jenis_aplikasi" => "all",
                "mimes_gambar_aplikasi" => "image/png",
                "extension_gambar_aplikasi" => "png",
                "ori_name_gambar_aplikasi" => "logo-sakti.png"
            ],
            (object) [
                "id_aplikasi" => 6,
                "nama_aplikasi" => "Layanan Perizinan",
                "gambar_aplikasi" => "https://www.pasuruankab.go.id/download-file/6/app/gambar_aplikasi/0",
                "url_aplikasi" => "https://siapmaslahat.pasuruankab.go.id/",
                "created_by" => 8,
                "updated_by" => 8,
                "created_at" => "2025-04-12 10:32:54",
                "updated_at" => "2025-04-12 10:32:54",
                "deskripsi_aplikasi" => "Layanan Perizinan & Publik Kab. Pasuruan Semakin Mudah!...",
                "jenis_aplikasi" => "publik",
                "mimes_gambar_aplikasi" => "image/png",
                "extension_gambar_aplikasi" => "png",
                "ori_name_gambar_aplikasi" => "Desain logo vektor....png"
            ],
            (object) [
                "id_aplikasi" => 8,
                "nama_aplikasi" => "Layanan Perikanan",
                "gambar_aplikasi" => "https://www.pasuruankab.go.id/download-file/8/app/gambar_aplikasi/0",
                "url_aplikasi" => "https://hallofish.pasuruankab.go.id/",
                "created_by" => 8,
                "updated_by" => null,
                "created_at" => "2025-04-12 10:42:14",
                "updated_at" => "2025-04-12 10:42:14",
                "deskripsi_aplikasi" => "Hallofish merupakan platform konsultasi perikanan online...",
                "jenis_aplikasi" => "publik",
                "mimes_gambar_aplikasi" => "image/png",
                "extension_gambar_aplikasi" => "png",
                "ori_name_gambar_aplikasi" => "hallofish.png"
            ],
            (object) [
                "id_aplikasi" => 9,
                "nama_aplikasi" => "Layanan UMKM",
                "gambar_aplikasi" => "https://www.pasuruankab.go.id/download-file/9/app/gambar_aplikasi/0",
                "url_aplikasi" => "https://apik.pasuruankab.go.id/",
                "created_by" => 8,
                "updated_by" => null,
                "created_at" => "2025-04-12 10:45:40",
                "updated_at" => "2025-04-12 10:45:40",
                "deskripsi_aplikasi" => "APIK (Aplikasi Pemberdayaan dan Peningkatan Kapasitas UMKM)...",
                "jenis_aplikasi" => "publik",
                "mimes_gambar_aplikasi" => "image/png",
                "extension_gambar_aplikasi" => "png",
                "ori_name_gambar_aplikasi" => "apik.png"
            ],
            (object) [
                "id_aplikasi" => 10,
                "nama_aplikasi" => "Peminjaman Sarana Prasarana",
                "gambar_aplikasi" => "https://www.pasuruankab.go.id/download-file/10/app/gambar_aplikasi/0",
                "url_aplikasi" => "https://saraswati.pasuruankab.go.id/",
                "created_by" => 8,
                "updated_by" => null,
                "created_at" => "2025-04-12 10:48:09",
                "updated_at" => "2025-04-12 10:48:09",
                "deskripsi_aplikasi" => "SARASWATI Solusi terintegrasi...",
                "jenis_aplikasi" => "publik",
                "mimes_gambar_aplikasi" => "image/png",
                "extension_gambar_aplikasi" => "png",
                "ori_name_gambar_aplikasi" => "saraswati.png"
            ],
            (object) [
                "id_aplikasi" => 11,
                "nama_aplikasi" => "Layanan Pengaduan Penyimpangan Aparat Pemerintah",
                "gambar_aplikasi" => "https://www.pasuruankab.go.id/download-file/11/app/gambar_aplikasi/0",
                "url_aplikasi" => "https://sepakat.pasuruankab.go.id/",
                "created_by" => 8,
                "updated_by" => null,
                "created_at" => "2025-04-12 10:52:24",
                "updated_at" => "2025-04-12 10:52:24",
                "deskripsi_aplikasi" => "SEPAKAT (Sistem Pengaduan dan Pengawasan Kolaboratif)...",
                "jenis_aplikasi" => "publik",
                "mimes_gambar_aplikasi" => "image/png",
                "extension_gambar_aplikasi" => "png",
                "ori_name_gambar_aplikasi" => "sepakat.png"
            ],
            (object) [
                "id_aplikasi" => 12,
                "nama_aplikasi" => "Pendaftaran Murid Baru",
                "gambar_aplikasi" => "https://www.pasuruankab.go.id/download-file/12/app/gambar_aplikasi/0",
                "url_aplikasi" => "https://spmb.pasuruankab.go.id/",
                "created_by" => 8,
                "updated_by" => null,
                "created_at" => "2025-04-12 12:14:12",
                "updated_at" => "2025-04-12 12:14:12",
                "deskripsi_aplikasi" => "Sistem Penerimaan Murid Baru (SPMB)...",
                "jenis_aplikasi" => "publik",
                "mimes_gambar_aplikasi" => "image/png",
                "extension_gambar_aplikasi" => "png",
                "ori_name_gambar_aplikasi" => "A minimalist logo design....png"
            ],
            (object) [
                "id_aplikasi" => 13,
                "nama_aplikasi" => "Layanan Pengadaan Barang/Jasa",
                "gambar_aplikasi" => "https://www.pasuruankab.go.id/download-file/13/app/gambar_aplikasi/0",
                "url_aplikasi" => "https://lpse.pasuruankab.go.id/eproc4",
                "created_by" => 8,
                "updated_by" => null,
                "created_at" => "2025-04-12 12:18:37",
                "updated_at" => "2025-04-12 12:18:37",
                "deskripsi_aplikasi" => "LPSE (Layanan Pengadaan Secara Elektronik)...",
                "jenis_aplikasi" => "publik",
                "mimes_gambar_aplikasi" => "image/png",
                "extension_gambar_aplikasi" => "png",
                "ori_name_gambar_aplikasi" => "lpse-logo.png"
            ],
            (object) [
                "id_aplikasi" => 15,
                "nama_aplikasi" => "Sistem Penghubung Layanan Pemerintah",
                "gambar_aplikasi" => "https://www.pasuruankab.go.id/download-file/15/app/gambar_aplikasi/0",
                "url_aplikasi" => "https://splp.pasuruankab.go.id/",
                "created_by" => 8,
                "updated_by" => null,
                "created_at" => "2025-04-12 13:22:02",
                "updated_at" => "2025-04-12 13:22:02",
                "deskripsi_aplikasi" => "Sistem Penghubung Layanan Pemerintah Daerah...",
                "jenis_aplikasi" => "all",
                "mimes_gambar_aplikasi" => "image/png",
                "extension_gambar_aplikasi" => "png",
                "ori_name_gambar_aplikasi" => "splp.png"
            ],
            (object) [
                "id_aplikasi" => 14,
                "nama_aplikasi" => "Administrasi Pengadaan",
                "gambar_aplikasi" => "https://www.pasuruankab.go.id/download-file/14/app/gambar_aplikasi/0",
                "url_aplikasi" => "https://sikapbaja.pasuruankab.go.id/",
                "created_by" => 8,
                "updated_by" => 8,
                "created_at" => "2025-04-12 13:24:03",
                "updated_at" => "2025-04-12 13:24:03",
                "deskripsi_aplikasi" => "SIKAP BAJA dirancang untuk Menyederhanakan...",
                "jenis_aplikasi" => "pemerintah",
                "mimes_gambar_aplikasi" => "image/png",
                "extension_gambar_aplikasi" => "png",
                "ori_name_gambar_aplikasi" => "sikap baja.png"
            ],
            (object) [
                "id_aplikasi" => 16,
                "nama_aplikasi" => "Indeks Kepuasan Masyarakat",
                "gambar_aplikasi" => "https://www.pasuruankab.go.id/download-file/16/app/gambar_aplikasi/0",
                "url_aplikasi" => "https://bukutamu.pasuruankab.go.id/hasil_survey",
                "created_by" => 8,
                "updated_by" => 8,
                "created_at" => "2025-04-14 14:50:42",
                "updated_at" => "2025-04-14 14:50:42",
                "deskripsi_aplikasi" => "Laman Indeks Kepuasan Masyarakat (IKM) Kabupaten Pasuruan...",
                "jenis_aplikasi" => "publik",
                "mimes_gambar_aplikasi" => "image/png",
                "extension_gambar_aplikasi" => "png",
                "ori_name_gambar_aplikasi" => "ikmsmile.png"
            ]
        ];

        $devLayanan = [
            (object)[
                'text' => 'Kependudukan',
                'url' => '/layanan/kependudukan',
            ],
            (object)[
                'text' => 'Perhubungan',
                'url' => '/layanan/perhubungan',
            ],
            (object)[
                'text' => 'Informasi & Komunikasi',
                'url' => '/layanan/informasi-dan-komunikasi',
            ],
            (object)[
                'text' => 'UMUM/PERIJINAN',
                'url' => '/layanan/umum-perijinan',
            ],
        ];


        $devData = collect(config('dummy.transparansi'));
        $devDataDownload = collect(config('dummy.downloads'));
        $devDataAgenda = collect(config('dummy.agenda'));
        $devDataMajalah = collect(config('dummy.majalah'));

        $data = [
            'devVisi' => $devVisi,
            'devData' => $devData,
            'devBannerUtama' => $devBannerUtama,
            'devAplikasi' => $devAplikasi,
            'devLayanan' => $devLayanan,
            'devDownload' => $devDataDownload,
            'devSumberDaya' => $devSumberDaya,
            'devDataAgenda' => $devDataAgenda,
            'devDataMajalah' => $devDataMajalah,
        ];

        return view('homepage.index', $data);
    }
}
