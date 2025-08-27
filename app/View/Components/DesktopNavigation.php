<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DesktopNavigation extends Component
{
    public $menuItems;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $baseUrl = config('app.url');
        $this->menuItems = [
            [
                'text' => 'Profil',
                'url' => '#',
                'children' => [
                    ['text' => 'Arti Lambang', 'url' => "$baseUrl/profil/halaman/arti-lambang", 'children' => []],
                    ['text' => 'Peta Pasuruan', 'url' => "$baseUrl/profil/halaman/peta-pasuruan", 'children' => []],
                    ['text' => 'Visi dan Misi', 'url' => "$baseUrl/profil/halaman/visi-misi", 'children' => []],
                    [
                        'text' => 'Pemerintahan',
                        'url' => '#',
                        'children' => [
                            ['text' => 'Bupati & Wakil Bupati', 'url' => "$baseUrl/profil/pemerintahan/bupati-wakil-bupati", 'children' => []],
                            ['text' => 'Lembaga Legislatif', 'url' => "$baseUrl/profil/pemerintahan/lembaga-legislatif", 'children' => []],
                            ['text' => 'Lembaga Eksekutif', 'url' => "$baseUrl/profil/pemerintahan/lembaga-eksekutif", 'children' => []],
                        ],
                    ],
                    ['text' => 'Sejarah Kabupaten Pasuruan', 'url' => "$baseUrl/halaman/sejarah-singkat-kab-pasuruan", 'children' => []],
                    [
                        'text' => 'Gambaran Umum',
                        'url' => "$baseUrl/halaman/gambaran-umum-kabupaten-pasuruan-2023",
                        'children' => [
                            ['text' => 'Gambaran Umum Kabupaten Pasuruan', 'url' => "$baseUrl/halaman/gambaran-umum-kabupaten-pasuruan-2025", 'children' => []],
                        ],
                    ],
                ],
            ],
            [
                'text' => 'Potensi',
                'url' => '#',
                'children' => [
                    ['text' => 'Prestasi', 'url' => "$baseUrl/postingan/potensi/prestasi", 'children' => []],
                    ['text' => 'Industri', 'url' => "$baseUrl/postingan/potensi/industri", 'children' => []],
                    ['text' => 'Koperasi', 'url' => "$baseUrl/postingan/potensi/koperasi", 'children' => []],
                    ['text' => 'Pariwisata', 'url' => "$baseUrl/postingan/potensi/pariwisata", 'children' => []],
                    // ['text' => 'Perikanan', 'url' => "$baseUrl/postingan/potensi/perikanan", 'children' => []],
                    // ['text' => 'Pertanian dan Ketahanan Pangan', 'url' => "$baseUrl/postingan/potensi/pertanian-dan-ketahanan-pangan", 'children' => []],
                    // ['text' => 'Peternakan', 'url' => "$baseUrl/postingan/potensi/peternakan", 'children' => []],
                    // ['text' => 'Perkebunan dan Kehutanan', 'url' => "$baseUrl/postingan/potensi/bunhut", 'children' => []],
                    // ['text' => 'Ekonomi Kreatif', 'url' => "$baseUrl/postingan/potensi/ekonomi-kreatif", 'children' => []],
                ],
            ],
            [
                'text' => 'Fasilitas',
                'url' => '#',
                'children' => [
                    ['text' => 'Kesehatan', 'url' => "$baseUrl/postingan/fasilitas/kesehatan", 'children' => []],
                    ['text' => 'Pendidikan', 'url' => "$baseUrl/postingan/fasilitas/pendidikan", 'children' => []],
                    ['text' => 'Pasar Daerah', 'url' => "$baseUrl/postingan/fasilitas/pasar-daerah", 'children' => []],
                    ['text' => 'PDAM', 'url' => "$baseUrl/postingan/fasilitas/pdam", 'children' => []],
                    ['text' => 'Perhubungan', 'url' => "$baseUrl/postingan/fasilitas/perhubungan", 'children' => []],
                    ['text' => 'Perpustakaan', 'url' => "$baseUrl/postingan/fasilitas/perpustakaan", 'children' => []],
                ],
            ],
            [
                'text' => 'Layanan',
                'url' => '#',
                'children' => [
                    [
                        'text' => 'Kependudukan',
                        'url' => '#',
                        'children' => [
                            ['text' => 'Kartu Identitas Anak', 'url' => 'https://dispendukcapil.pasuruankab.go.id/halaman/kartu-identitas-anak', 'children' => []],
                            ['text' => 'Akta Perkawinan dan Perceraian', 'url' => 'https://dispendukcapil.pasuruankab.go.id/halaman/akta-perkawinan-dan-perceraian', 'children' => []],
                            ['text' => 'Akta Pencatatan Kematian', 'url' => 'https://dispendukcapil.pasuruankab.go.id/halaman/akta-pencatatan-kematian', 'children' => []],
                            ['text' => 'Surat Mutasi Penduduk', 'url' => 'https://dispendukcapil.pasuruankab.go.id/halaman/surat-mutasi-penduduk-skpwni-', 'children' => []],
                            ['text' => 'KTP Elektronik', 'url' => 'https://dispendukcapil.pasuruankab.go.id/halaman/kartu-tanda-penduduk-elektronik-ktp---el-', 'children' => []],
                            ['text' => 'SKTT', 'url' => 'https://dispendukcapil.pasuruankab.go.id/halaman/sktt', 'children' => []],
                            ['text' => 'Kartu Keluarga', 'url' => 'https://dispendukcapil.pasuruankab.go.id/halaman/kartu-keluarga-kk', 'children' => []],
                            ['text' => 'Akta Pencatatan Sipil', 'url' => 'https://dispendukcapil.pasuruankab.go.id/halaman/akta-pencatatan-sipil', 'children' => []],
                        ],
                    ],
                    [
                        'text' => 'Perhubungan',
                        'url' => '#',
                        'children' => [
                            ['text' => 'Pengujian Kendaraan Bermotor', 'url' => 'https://dishub.pasuruankab.go.id/pages/ujikir', 'children' => []],
                            ['text' => 'Ramp Check', 'url' => 'https://dishub.pasuruankab.go.id/pages/rampcek', 'children' => []],
                            ['text' => 'Perizinan Angkutan', 'url' => 'https://dishub.pasuruankab.go.id/pages/angkut', 'children' => []],
                            ['text' => 'Perizinan Perpakiran', 'url' => 'https://dishub.pasuruankab.go.id/pages/parkir', 'children' => []],
                            ['text' => 'Analisis Dampak Lalu Lintas', 'url' => 'https://dishub.pasuruankab.go.id/pages/andalalin', 'children' => []],
                            ['text' => 'Pengaduan PJU Kabupaten Pauruan', 'url' => 'https://dishub.pasuruankab.go.id/pages/adupju', 'children' => []],
                        ],
                    ],
                    ['text' => 'Kesehatan', 'url' => 'https://www.pasuruankab.go.id/kategori/layanan/445/kesehatan', 'children' => []],
                    [
                        'text' => 'Informasi & Komunikasi',
                        'url' => '#',
                        'children' => [
                            ['text' => 'Pelayanan Konsultasi TIK Pada Aplikasi SAKTI', 'url' => 'https://diskominfo.pasuruankab.go.id/halaman/pelayanan-konsultasi-tik-pada-aplikasi-sakti', 'children' => []],
                            ['text' => 'Layanan Nomor Tunggal Panggilan Darurat 112', 'url' => 'https://diskominfo.pasuruankab.go.id/halaman/layanan-nomor-tunggal-panggilan-darurat-112', 'children' => []],
                            ['text' => 'Pelayanan Pengaduan', 'url' => 'https://diskominfo.pasuruankab.go.id/halaman/pelayanan-pengaduan', 'children' => []],
                            ['text' => 'Pelayanan Sub Domain, Hosting dan VPS', 'url' => 'https://diskominfo.pasuruankab.go.id/halaman/pelayanan-sub-domain-hosting-dan-vps', 'children' => []],
                            ['text' => 'Pelayanan Gangguan Jaringan Internet/LAN', 'url' => 'https://diskominfo.pasuruankab.go.id/halaman/pelayanan-gangguan-jaringan-internet-lan', 'children' => []],
                            ['text' => 'Pelayanan Pengajuan Keamanan Sistem Informasi', 'url' => 'https://diskominfo.pasuruankab.go.id/halaman/pelayanan-pengajuan-keamanan-sistem-informasi', 'children' => []],
                            ['text' => 'Pelayanan Permohonan Penyelenggaraan Video Conference', 'url' => 'https://diskominfo.pasuruankab.go.id/halaman/pelayanan-permohonan-penyelenggaraan-video-conference', 'children' => []],
                            ['text' => 'Pelayanan Sandi dan Telekomunikasi (Santel)', 'url' => 'https://diskominfo.pasuruankab.go.id/halaman/pelayanan-sandi-dan-telekomunikasi-santel', 'children' => []],
                            ['text' => 'Pelayanan Sosialisasi Permohonan Narasumber Terkait Aplikasi', 'url' => 'https://diskominfo.pasuruankab.go.id/halaman/pelayanan-sosialisasi-permohonan-narasumber-terkait-aplikasi', 'children' => []],
                        ],
                    ],
                    [
                        'text' => 'UMUM/PERIJINAN',
                        'url' => '#',
                        'children' => [
                            ['text' => 'Sektor Peternakan', 'url' => 'https://dpmptsp.pasuruankab.go.id/halaman/sektor-peternakan', 'children' => []],
                            ['text' => 'Sektor Perikanan', 'url' => 'https://dpmptsp.pasuruankab.go.id/halaman/sektor-perikanan', 'children' => []],
                            ['text' => 'Sektor Perhubungan', 'url' => 'https://dpmptsp.pasuruankab.go.id/halaman/sektor-perhubungan', 'children' => []],
                            ['text' => 'Sektor Pariwisata', 'url' => 'https://dpmptsp.pasuruankab.go.id/halaman/sektor-pariwisata', 'children' => []],
                            ['text' => 'Sektor Sosial', 'url' => 'https://dpmptsp.pasuruankab.go.id/halaman/sektor-sosial', 'children' => []],
                            ['text' => 'Sektor Tenaga Kerja', 'url' => 'https://dpmptsp.pasuruankab.go.id/halaman/sektor-tenaga-kerja', 'children' => []],
                            ['text' => 'Sektor Kesehatan', 'url' => 'https://dpmptsp.pasuruankab.go.id/halaman/sektor-kesehatan', 'children' => []],
                            ['text' => 'Sektor Pendidikan', 'url' => 'https://dpmptsp.pasuruankab.go.id/halaman/sektor-pendidikan', 'children' => []],
                            ['text' => 'Sektor Pekerjaan Umum', 'url' => 'https://dpmptsp.pasuruankab.go.id/halaman/sektor-pekerjaan-umum', 'children' => []],
                        ],
                    ],
                ],
            ],
            ['text' => 'Sumber Daya', 'url' => "$baseUrl/home#sumber-daya", 'children' => []],
            ['text' => 'Kontak', 'url' => "$baseUrl/kontak", 'children' => []],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.desktop-navigation');
    }
}
