<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class PostController extends Controller
{
    //
    function postsList(Request $request)
    {
<<<<<<< HEAD
        $tipe_kategori = 'Potensi';
=======
        $tipe_kategori = 'potensi';
>>>>>>> da5bdc0 (slicing bupati)
        $slug_kategori = 'pariwisata';

        $devLis = collect([
            (object)['slug_kategori' => 'pariwisata', 'nama_kategori' => 'Pariwisata'],
            (object)['slug_kategori' => 'industri', 'nama_kategori' => 'Industri'],
            (object)['slug_kategori' => 'pertanian', 'nama_kategori' => 'Pertanian'],
            (object)['slug_kategori' => 'prestasi', 'nama_kategori' => 'Prestasi'],
        ]);

        $dummyPosts = [
            (object) [
                'id_posts' => 101,
                'slug_posts' => 'pesona-matahari-terbit-di-gunung-bromo',
                'judul_posts' => 'Menyaksikan Pesona Matahari Terbit di Puncak Penanjakan Bromo 1',
                'waktu_publish' => '2025-08-21 09:15:00',
                'konten_posts' => '<b>Gunung Bromo</b> tetap menjadi magnet bagi wisatawan domestik dan mancanegara. Pemandangan matahari terbit dari Puncak Penanjakan adalah pengalaman magis yang tidak akan terlupakan...',
                'gambar_posts' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/1200px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg',
                'gambar_posts_2' => null, // Tidak ada gambar kedua
                'kategori' => (object) [
                    'slug_kategori' => 'pariwisata',
                    'tipe_kategori' => 'potensi',
                    'nama_kategori' => 'Pariwisata',
                ],
                'user_creator' => (object) [
                    'nama_lengkap' => 'Admin Disparbud',
                ],
            ],
            (object) [
                'id_posts' => 102,
                'slug_posts' => 'petualangan-seru-di-taman-safari-prigen',
                'judul_posts' => 'Petualangan Seru dan Edukatif di Taman Safari Prigen 2',
                'waktu_publish' => '2025-08-20 14:30:00',
                'konten_posts' => '<b>Taman Safari Indonesia II</b> di Prigen, Pasuruan, menawarkan pengalaman unik berinteraksi langsung dengan satwa liar dari berbagai belahan dunia di habitat aslinya...',
                'gambar_posts' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/1200px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg',
                'gambar_posts_2' => 'https://apimice.kemenparekraf.go.id/event-daerah/public/676/3cd/917/6763cd9174641985422603.webp', // Ada gambar kedua
                'kategori' => (object) [
                    'slug_kategori' => 'pariwisata',
                    'tipe_kategori' => 'potensi',
                    'nama_kategori' => 'Pariwisata',
                ],
                'user_creator' => (object) [
                    'nama_lengkap' => 'Rina Setyawati',
                ],
            ],
            (object) [
                'id_posts' => 103,
                'slug_posts' => 'aroma-khas-kopi-lereng-arjuno',
                'judul_posts' => 'Mengenal Aroma Khas Kopi Robusta dari Lereng Arjuno 3',
                'waktu_publish' => '2025-08-19 11:00:00',
                'konten_posts' => 'Kopi Kapiten dari Pasuruan, khususnya yang berasal dari lereng Gunung Arjuno, memiliki cita rasa dan aroma yang khas. Potensi perkebunan kopi di wilayah ini terus berkembang...',
                'gambar_posts' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/1200px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg',
                'gambar_posts_2' => 'https://apimice.kemenparekraf.go.id/event-daerah/public/676/3cd/917/6763cd9174641985422603.webp', // Ada gambar kedua
                'kategori' => (object) [
                    'slug_kategori' => 'pertanian',
                    'tipe_kategori' => 'potensi',
                    'nama_kategori' => 'Pertanian',
                ],
                'user_creator' => (object) [
                    'nama_lengkap' => 'Budi Hartono',
                ],
            ],
            (object) [
                'id_posts' => 104,
                'slug_posts' => 'pusat-industri-mebel-bukir-pasuruan',
                'judul_posts' => 'Bukir, Jantung Industri Mebel dan Kerajinan Kayu Pasuruan 4',
                'waktu_publish' => '2025-08-18 16:45:00',
                'konten_posts' => 'Kawasan Bukir di Kota Pasuruan telah lama dikenal sebagai sentra industri mebel. Kualitas produk kayu dari para pengrajin lokal telah diakui hingga menembus pasar ekspor...',
                'gambar_posts' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/1200px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg',
                'gambar_posts_2' => null, // Tidak ada gambar kedua
                'kategori' => (object) [
                    'slug_kategori' => 'industri',
                    'tipe_kategori' => 'potensi',
                    'nama_kategori' => 'Industri',
                ],
                'user_creator' => (object) [
                    'nama_lengkap' => 'Admin Disperindag',
                ],
            ],
            (object) [
                'id_posts' => 101,
                'slug_posts' => 'pesona-matahari-terbit-di-gunung-bromo',
                'judul_posts' => 'Menyaksikan Pesona Matahari Terbit di Puncak Penanjakan Bromo 5 ',
                'waktu_publish' => '2025-08-21 09:15:00',
                'konten_posts' => '<b>Gunung Bromo</b> tetap menjadi magnet bagi wisatawan domestik dan mancanegara. Pemandangan matahari terbit dari Puncak Penanjakan adalah pengalaman magis yang tidak akan terlupakan...',
                'gambar_posts' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/1200px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg',
                'gambar_posts_2' => null, // Tidak ada gambar kedua
                'kategori' => (object) [
                    'slug_kategori' => 'pariwisata',
                    'tipe_kategori' => 'potensi',
                    'nama_kategori' => 'Pariwisata',
                ],
                'user_creator' => (object) [
                    'nama_lengkap' => 'Admin Disparbud',
                ],
            ],
            (object) [
                'id_posts' => 102,
                'slug_posts' => 'petualangan-seru-di-taman-safari-prigen',
                'judul_posts' => 'Petualangan Seru dan Edukatif di Taman Safari Prigen 6',
                'waktu_publish' => '2025-08-20 14:30:00',
                'konten_posts' => '<b>Taman Safari Indonesia II</b> di Prigen, Pasuruan, menawarkan pengalaman unik berinteraksi langsung dengan satwa liar dari berbagai belahan dunia di habitat aslinya...',
                'gambar_posts' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/1200px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg',
                'gambar_posts_2' => 'https://apimice.kemenparekraf.go.id/event-daerah/public/676/3cd/917/6763cd9174641985422603.webp', // Ada gambar kedua
                'kategori' => (object) [
                    'slug_kategori' => 'pariwisata',
                    'tipe_kategori' => 'potensi',
                    'nama_kategori' => 'Pariwisata',
                ],
                'user_creator' => (object) [
                    'nama_lengkap' => 'Rina Setyawati',
                ],
            ],
            (object) [
                'id_posts' => 103,
                'slug_posts' => 'aroma-khas-kopi-lereng-arjuno',
                'judul_posts' => 'Mengenal Aroma Khas Kopi Robusta dari Lereng Arjuno 7',
                'waktu_publish' => '2025-08-19 11:00:00',
                'konten_posts' => 'Kopi Kapiten dari Pasuruan, khususnya yang berasal dari lereng Gunung Arjuno, memiliki cita rasa dan aroma yang khas. Potensi perkebunan kopi di wilayah ini terus berkembang...',
                'gambar_posts' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/1200px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg',
                'gambar_posts_2' => 'https://apimice.kemenparekraf.go.id/event-daerah/public/676/3cd/917/6763cd9174641985422603.webp', // Ada gambar kedua
                'kategori' => (object) [
                    'slug_kategori' => 'pertanian',
                    'tipe_kategori' => 'potensi',
                    'nama_kategori' => 'Pertanian',
                ],
                'user_creator' => (object) [
                    'nama_lengkap' => 'Budi Hartono',
                ],
            ],
            (object) [
                'id_posts' => 104,
                'slug_posts' => 'pusat-industri-mebel-bukir-pasuruan',
                'judul_posts' => 'Bukir, Jantung Industri Mebel dan Kerajinan Kayu Pasuruan',
                'waktu_publish' => '2025-08-18 16:45:00',
                'konten_posts' => 'Kawasan Bukir di Kota Pasuruan telah lama dikenal sebagai sentra industri mebel. Kualitas produk kayu dari para pengrajin lokal telah diakui hingga menembus pasar ekspor...',
                'gambar_posts' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/1200px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg',
                'gambar_posts_2' => null, // Tidak ada gambar kedua
                'kategori' => (object) [
                    'slug_kategori' => 'industri',
                    'tipe_kategori' => 'potensi',
                    'nama_kategori' => 'Industri',
                ],
                'user_creator' => (object) [
                    'nama_lengkap' => 'Admin Disperindag',
                ],
            ],
            (object) [
                'id_posts' => 101,
                'slug_posts' => 'pesona-matahari-terbit-di-gunung-bromo',
                'judul_posts' => 'Menyaksikan Pesona Matahari Terbit di Puncak Penanjakan Bromo',
                'waktu_publish' => '2025-08-21 09:15:00',
                'konten_posts' => '<b>Gunung Bromo</b> tetap menjadi magnet bagi wisatawan domestik dan mancanegara. Pemandangan matahari terbit dari Puncak Penanjakan adalah pengalaman magis yang tidak akan terlupakan...',
                'gambar_posts' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/1200px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg',
                'gambar_posts_2' => null, // Tidak ada gambar kedua
                'kategori' => (object) [
                    'slug_kategori' => 'pariwisata',
                    'tipe_kategori' => 'potensi',
                    'nama_kategori' => 'Pariwisata',
                ],
                'user_creator' => (object) [
                    'nama_lengkap' => 'Admin Disparbud',
                ],
            ],
            (object) [
                'id_posts' => 102,
                'slug_posts' => 'petualangan-seru-di-taman-safari-prigen',
                'judul_posts' => 'Petualangan Seru dan Edukatif di Taman Safari Prigen',
                'waktu_publish' => '2025-08-20 14:30:00',
                'konten_posts' => '<b>Taman Safari Indonesia II</b> di Prigen, Pasuruan, menawarkan pengalaman unik berinteraksi langsung dengan satwa liar dari berbagai belahan dunia di habitat aslinya...',
                'gambar_posts' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/1200px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg',
                'gambar_posts_2' => 'https://apimice.kemenparekraf.go.id/event-daerah/public/676/3cd/917/6763cd9174641985422603.webp', // Ada gambar kedua
                'kategori' => (object) [
                    'slug_kategori' => 'pariwisata',
                    'tipe_kategori' => 'potensi',
                    'nama_kategori' => 'Pariwisata',
                ],
                'user_creator' => (object) [
                    'nama_lengkap' => 'Rina Setyawati',
                ],
            ],
            (object) [
                'id_posts' => 103,
                'slug_posts' => 'aroma-khas-kopi-lereng-arjuno',
                'judul_posts' => 'Mengenal Aroma Khas Kopi Robusta dari Lereng Arjuno',
                'waktu_publish' => '2025-08-19 11:00:00',
                'konten_posts' => 'Kopi Kapiten dari Pasuruan, khususnya yang berasal dari lereng Gunung Arjuno, memiliki cita rasa dan aroma yang khas. Potensi perkebunan kopi di wilayah ini terus berkembang...',
                'gambar_posts' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/1200px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg',
                'gambar_posts_2' => 'https://apimice.kemenparekraf.go.id/event-daerah/public/676/3cd/917/6763cd9174641985422603.webp', // Ada gambar kedua
                'kategori' => (object) [
                    'slug_kategori' => 'pertanian',
                    'tipe_kategori' => 'potensi',
                    'nama_kategori' => 'Pertanian',
                ],
                'user_creator' => (object) [
                    'nama_lengkap' => 'Budi Hartono',
                ],
            ],
            (object) [
                'id_posts' => 104,
                'slug_posts' => 'pusat-industri-mebel-bukir-pasuruan',
                'judul_posts' => 'Bukir, Jantung Industri Mebel dan Kerajinan Kayu Pasuruan',
                'waktu_publish' => '2025-08-18 16:45:00',
                'konten_posts' => 'Kawasan Bukir di Kota Pasuruan telah lama dikenal sebagai sentra industri mebel. Kualitas produk kayu dari para pengrajin lokal telah diakui hingga menembus pasar ekspor...',
                'gambar_posts' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/1200px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg',
                'gambar_posts_2' => null, // Tidak ada gambar kedua
                'kategori' => (object) [
                    'slug_kategori' => 'industri',
                    'tipe_kategori' => 'potensi',
                    'nama_kategori' => 'Industri',
                ],
                'user_creator' => (object) [
                    'nama_lengkap' => 'Admin Disperindag',
                ],
            ],
            (object) [
                'id_posts' => 101,
                'slug_posts' => 'pesona-matahari-terbit-di-gunung-bromo',
                'judul_posts' => 'Menyaksikan Pesona Matahari Terbit di Puncak Penanjakan Bromo',
                'waktu_publish' => '2025-08-21 09:15:00',
                'konten_posts' => '<b>Gunung Bromo</b> tetap menjadi magnet bagi wisatawan domestik dan mancanegara. Pemandangan matahari terbit dari Puncak Penanjakan adalah pengalaman magis yang tidak akan terlupakan...',
                'gambar_posts' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/1200px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg',
                'gambar_posts_2' => null, // Tidak ada gambar kedua
                'kategori' => (object) [
                    'slug_kategori' => 'pariwisata',
                    'tipe_kategori' => 'potensi',
                    'nama_kategori' => 'Pariwisata',
                ],
                'user_creator' => (object) [
                    'nama_lengkap' => 'Admin Disparbud',
                ],
            ],
            (object) [
                'id_posts' => 102,
                'slug_posts' => 'petualangan-seru-di-taman-safari-prigen',
                'judul_posts' => 'Petualangan Seru dan Edukatif di Taman Safari Prigen',
                'waktu_publish' => '2025-08-20 14:30:00',
                'konten_posts' => '<b>Taman Safari Indonesia II</b> di Prigen, Pasuruan, menawarkan pengalaman unik berinteraksi langsung dengan satwa liar dari berbagai belahan dunia di habitat aslinya...',
                'gambar_posts' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/1200px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg',
                'gambar_posts_2' => 'https://apimice.kemenparekraf.go.id/event-daerah/public/676/3cd/917/6763cd9174641985422603.webp', // Ada gambar kedua
                'kategori' => (object) [
                    'slug_kategori' => 'pariwisata',
                    'tipe_kategori' => 'potensi',
                    'nama_kategori' => 'Pariwisata',
                ],
                'user_creator' => (object) [
                    'nama_lengkap' => 'Rina Setyawati',
                ],
            ],
            (object) [
                'id_posts' => 103,
                'slug_posts' => 'aroma-khas-kopi-lereng-arjuno',
                'judul_posts' => 'Mengenal Aroma Khas Kopi Robusta dari Lereng Arjuno',
                'waktu_publish' => '2025-08-19 11:00:00',
                'konten_posts' => 'Kopi Kapiten dari Pasuruan, khususnya yang berasal dari lereng Gunung Arjuno, memiliki cita rasa dan aroma yang khas. Potensi perkebunan kopi di wilayah ini terus berkembang...',
                'gambar_posts' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/1200px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg',
                'gambar_posts_2' => 'https://apimice.kemenparekraf.go.id/event-daerah/public/676/3cd/917/6763cd9174641985422603.webp', // Ada gambar kedua
                'kategori' => (object) [
                    'slug_kategori' => 'pertanian',
                    'tipe_kategori' => 'potensi',
                    'nama_kategori' => 'Pertanian',
                ],
                'user_creator' => (object) [
                    'nama_lengkap' => 'Budi Hartono',
                ],
            ],
            (object) [
                'id_posts' => 104,
                'slug_posts' => 'pusat-industri-mebel-bukir-pasuruan',
                'judul_posts' => 'Bukir, Jantung Industri Mebel dan Kerajinan Kayu Pasuruan',
                'waktu_publish' => '2025-08-18 16:45:00',
                'konten_posts' => 'Kawasan Bukir di Kota Pasuruan telah lama dikenal sebagai sentra industri mebel. Kualitas produk kayu dari para pengrajin lokal telah diakui hingga menembus pasar ekspor...',
                'gambar_posts' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/1200px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg',
                'gambar_posts_2' => null, // Tidak ada gambar kedua
                'kategori' => (object) [
                    'slug_kategori' => 'industri',
                    'tipe_kategori' => 'potensi',
                    'nama_kategori' => 'Industri',
                ],
                'user_creator' => (object) [
                    'nama_lengkap' => 'Admin Disperindag',
                ],
            ],
            (object) [
                'id_posts' => 101,
                'slug_posts' => 'pesona-matahari-terbit-di-gunung-bromo',
                'judul_posts' => 'Menyaksikan Pesona Matahari Terbit di Puncak Penanjakan Bromo',
                'waktu_publish' => '2025-08-21 09:15:00',
                'konten_posts' => '<b>Gunung Bromo</b> tetap menjadi magnet bagi wisatawan domestik dan mancanegara. Pemandangan matahari terbit dari Puncak Penanjakan adalah pengalaman magis yang tidak akan terlupakan...',
                'gambar_posts' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/1200px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg',
                'gambar_posts_2' => null, // Tidak ada gambar kedua
                'kategori' => (object) [
                    'slug_kategori' => 'pariwisata',
                    'tipe_kategori' => 'potensi',
                    'nama_kategori' => 'Pariwisata',
                ],
                'user_creator' => (object) [
                    'nama_lengkap' => 'Admin Disparbud',
                ],
            ],
            (object) [
                'id_posts' => 102,
                'slug_posts' => 'petualangan-seru-di-taman-safari-prigen',
                'judul_posts' => 'Petualangan Seru dan Edukatif di Taman Safari Prigen',
                'waktu_publish' => '2025-08-20 14:30:00',
                'konten_posts' => '<b>Taman Safari Indonesia II</b> di Prigen, Pasuruan, menawarkan pengalaman unik berinteraksi langsung dengan satwa liar dari berbagai belahan dunia di habitat aslinya...',
                'gambar_posts' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/1200px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg',
                'gambar_posts_2' => 'https://apimice.kemenparekraf.go.id/event-daerah/public/676/3cd/917/6763cd9174641985422603.webp', // Ada gambar kedua
                'kategori' => (object) [
                    'slug_kategori' => 'pariwisata',
                    'tipe_kategori' => 'potensi',
                    'nama_kategori' => 'Pariwisata',
                ],
                'user_creator' => (object) [
                    'nama_lengkap' => 'Rina Setyawati',
                ],
            ],
            (object) [
                'id_posts' => 103,
                'slug_posts' => 'aroma-khas-kopi-lereng-arjuno',
                'judul_posts' => 'Mengenal Aroma Khas Kopi Robusta dari Lereng Arjuno',
                'waktu_publish' => '2025-08-19 11:00:00',
                'konten_posts' => 'Kopi Kapiten dari Pasuruan, khususnya yang berasal dari lereng Gunung Arjuno, memiliki cita rasa dan aroma yang khas. Potensi perkebunan kopi di wilayah ini terus berkembang...',
                'gambar_posts' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/1200px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg',
                'gambar_posts_2' => 'https://apimice.kemenparekraf.go.id/event-daerah/public/676/3cd/917/6763cd9174641985422603.webp', // Ada gambar kedua
                'kategori' => (object) [
                    'slug_kategori' => 'pertanian',
                    'tipe_kategori' => 'potensi',
                    'nama_kategori' => 'Pertanian',
                ],
                'user_creator' => (object) [
                    'nama_lengkap' => 'Budi Hartono',
                ],
            ],
            (object) [
                'id_posts' => 104,
                'slug_posts' => 'pusat-industri-mebel-bukir-pasuruan',
                'judul_posts' => 'Bukir, Jantung Industri Mebel dan Kerajinan Kayu Pasuruan',
                'waktu_publish' => '2025-08-18 16:45:00',
                'konten_posts' => 'Kawasan Bukir di Kota Pasuruan telah lama dikenal sebagai sentra industri mebel. Kualitas produk kayu dari para pengrajin lokal telah diakui hingga menembus pasar ekspor...',
                'gambar_posts' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg/1200px-Mount_Bromo_at_sunrise%2C_showing_its_volcanoes_and_Mount_Semeru_%28background%29.jpg',
                'gambar_posts_2' => null, // Tidak ada gambar kedua
                'kategori' => (object) [
                    'slug_kategori' => 'industri',
                    'tipe_kategori' => 'potensi',
                    'nama_kategori' => 'Industri',
                ],
                'user_creator' => (object) [
                    'nama_lengkap' => 'Admin Disperindag',
                ],
            ],
        ];

        // Dummy pagination
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 12;
        $currentPageItems = array_slice($dummyPosts, ($currentPage - 1) * $perPage, $perPage);
        $devData = new LengthAwarePaginator($currentPageItems, count($dummyPosts), $perPage);
        $devData->setPath(request()->url());

        // Breadcrumb construction
        $segments = $request->segments();
        $breadcrumbs = [];
        $url = '';

        foreach ($segments as $segment) {
            $url .= '/' . $segment;
            $text = ucwords(str_replace(['-', '_'], ' ', $segment));

            $breadcrumbs[] = [
                'text' => $text,
                'url'  => $url
            ];
        }

        array_unshift($breadcrumbs, ['text' => 'Home', 'url' => '/']);

        if (count($breadcrumbs) > 1) {
            $breadcrumbs[count($breadcrumbs) - 1]['url'] = null;
        }

        $data = [
            'namePage' => $tipe_kategori,
            'devTitle' => $tipe_kategori,
            'devIndex' => $slug_kategori,
            'devNavigasi' => [],
            'devLis' => $devLis,
            'devData' => $devData,
            'breadcrumbs' => $breadcrumbs
        ];

        return view('post.index', $data);
    }
};
