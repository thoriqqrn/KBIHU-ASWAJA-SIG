<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sinilah Anda bisa mendaftarkan semua route untuk aplikasi Anda.
|
*/

// Route untuk Halaman Utama (Beranda)
Route::get('/', function () {
    return view('beranda');
});

// Route untuk Halaman Tentang Kami
Route::get('/tentang-kami', function () {
    return view('tentangkami');
});

// Route untuk Halaman Program
Route::get('/program', function () {
    return view('program');
});

// Route untuk Halaman Galeri (dengan data dummy)
Route::get('/galeri', function () {
    // Nanti, data ini akan diambil dari database oleh Admin
    $gallery2025 = [
        ['src' => '2025-01.jpg', 'title' => 'Persiapan Keberangkatan'],
        ['src' => '2025-02.jpg', 'title' => 'Masjidil Haram'],
        ['src' => '2025-03.jpg', 'title' => 'Masjid Nabawi'],
    ];

    $gallery2024 = [
        ['src' => '2024-01.jpg', 'title' => 'Manasik di Tanah Air'],
        ['src' => '2024-02.jpg', 'title' => 'Thawaf di Masjidil Haram'],
        ['src' => '2024-03.jpg', 'title' => 'Wukuf di Arafah'],
        ['src' => '2024-04.jpg', 'title' => 'Kebersamaan Jemaah'],
        ['src' => '2024-05.jpg', 'title' => 'Doa Bersama'],
        ['src' => '2024-06.jpg', 'title' => 'Kepulangan ke Tanah Air'],
    ];

    // Mengirimkan data gambar ke view 'galeri'
    return view('galeri')
        ->with('gallery2025', $gallery2025)
        ->with('gallery2024', $gallery2024);
});

// Route untuk Halaman Berita & Artikel (dengan data dummy)
Route::get('/berita', function () {
    // Nanti, data ini akan diambil dari database
    $featuredArticle = [
        'image' => 'https://images.unsplash.com/photo-1560421683-137b2d56c208?q=80&w=2071&auto=format&fit=crop',
        'category' => 'Tips & Trik',
        'title' => '5 Tips Menjaga Kesehatan Fisik Selama Ibadah Haji',
        'excerpt' => 'Menjaga kondisi tubuh tetap prima adalah kunci agar dapat menjalankan seluruh rukun haji dengan lancar. Simak beberapa tips praktis yang bisa Anda terapkan.'
    ];

    $articles = [
        [
            'image' => 'https://images.unsplash.com/photo-1602157125799-73e488f28584?q=80&w=1939&auto=format&fit=crop',
            'category' => 'Manasik',
            'title' => 'Memahami Makna dan Keutamaan Wukuf di Arafah',
            'excerpt' => 'Wukuf di Arafah adalah puncak dari ibadah haji. Mari kita selami makna spiritual di baliknya agar ibadah lebih khusyuk dan bermakna.'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1589923188900-85da55557763?q=80&w=1932&auto=format&fit=crop',
            'category' => 'Info Terkini',
            'title' => 'Kebijakan Baru Pemerintah Arab Saudi untuk Haji 2025',
            'excerpt' => 'Beberapa kebijakan baru yang perlu diketahui oleh para calon jamaah.'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1554232456-8727a6953534?q=80&w=2070&auto=format&fit=crop',
            'category' => 'Kisah Inspiratif',
            'title' => 'Perjalanan Spiritual: Kisah Jamaah Tertua Tahun Ini',
            'excerpt' => 'Sebuah kisah inspiratif tentang semangat dan keteguhan hati seorang nenek berusia 90 tahun dalam menunaikan ibadah haji.'
        ],
        [
            'image' => null, // Contoh artikel tanpa gambar
            'category' => 'Tips & Trik',
            'title' => 'Perlengkapan Wajib Dibawa Saat Berhaji',
            'excerpt' => 'Pastikan tidak ada yang tertinggal dengan checklist perlengkapan penting ini agar ibadah Anda lebih nyaman dan fokus.'
        ],
    ];

    return view('berita')
        ->with('featuredArticle', $featuredArticle)
        ->with('articles', $articles);
});

// Route untuk MENAMPILKAN halaman pendaftaran (GET)
Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

// Route untuk MENANGANI PENGIRIMAN formulir (POST)
Route::post('/pendaftaran', function () {
    // Untuk saat ini, kita hanya akan kembali ke halaman sebelumnya
    // dengan pesan sukses. Nanti, di sini adalah tempat untuk
    // menyimpan data ke database.
    return back()->with('success', 'Pendaftaran Anda berhasil dikirim!');
})->name('pendaftaran.store');