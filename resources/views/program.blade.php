@extends('layouts.main')

@section('title', 'Program Kami | KBIHU Aswaja')

@section('content')

    <!-- 1. Page Header -->
    <div class="py-5 text-center" style="background-color: #f0f4f2;">
        <div class="container">
            <h1 class="display-4 fw-bold">Program Unggulan Kami</h1>
            <p class="lead text-muted col-lg-8 mx-auto">Kami menyediakan program bimbingan yang terstruktur dan komprehensif
                untuk mempersiapkan Anda menjadi tamu Allah yang mabrur.</p>
        </div>
    </div>

    <!-- 2. Detail Program -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="row g-5">
                <!-- Kartu Penerimaan Jemaah Haji -->
                <div class="col-lg-6">
                    <!-- PERUBAHAN: shadow-sm & card-hover-effect diubah menjadi card-shadow-green -->
                    <div class="bg-white p-5 rounded-custom h-100 card-shadow-green">
                        <div class="d-flex align-items-center mb-4">
                            <div class="fs-1 text-success me-4"><i class="fa-solid fa-file-signature"></i></div>
                            <div>
                                <h3 class="fw-bold mb-0">Penerimaan Jemaah</h3>
                                <p class="text-muted mb-0">Tahapan awal perjalanan Anda</p>
                            </div>
                        </div>
                        <p class="text-muted">Proses pendaftaran kami rancang agar mudah, transparan, dan terarah. Kami akan
                            mendampingi Anda di setiap langkah, mulai dari konsultasi hingga kelengkapan administrasi.</p>
                        <hr class="my-4">
                        <h5 class="fw-bold mb-3">Layanan yang Termasuk:</h5>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Konsultasi pemilihan
                                program haji.</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Bantuan pengurusan dokumen
                                perjalanan.</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Pemeriksaan kesehatan awal.
                            </li>
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Pengukuran seragam dan
                                perlengkapan.</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Pembuatan paspor dan visa.
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Kartu Manasik Haji -->
                <div class="col-lg-6">
                    <!-- PERUBAHAN: shadow-sm & card-hover-effect diubah menjadi card-shadow-green -->
                    <div class="bg-white p-5 rounded-custom h-100 card-shadow-green">
                        <div class="d-flex align-items-center mb-4">
                            <div class="fs-1 text-success me-4"><i class="fa-solid fa-book-open-reader"></i></div>
                            <div>
                                <h3 class="fw-bold mb-0">Bimbingan Manasik</h3>
                                <p class="text-muted mb-0">Bekal ilmu menuju Tanah Suci</p>
                            </div>
                        </div>
                        <p class="text-muted">Program manasik kami adalah inti dari bimbingan KBIHU Aswaja. Disampaikan oleh
                            pembimbing ahli, materi mencakup teori dan praktik agar Anda siap secara lahir dan batin.</p>
                        <hr class="my-4">
                        <h5 class="fw-bold mb-3">Materi Bimbingan:</h5>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Teori Fiqih Haji sesuai
                                sunnah.</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Praktik Thawaf, Sa'i, dan
                                Lempar Jumrah.</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Simulasi perjalanan haji
                                (Arafah, Muzdalifah, Mina).</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Pembekalan doa-doa dan
                                amalan harian.</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Tips kesehatan dan menjaga
                                stamina di Tanah Suci.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Call to Action -->
    <section class="py-5" style="background-color: #f0f4f2;">
        <div class="container">
            <div class="text-center p-5 rounded-custom" style="background-color: var(--primary-color); color: #fff;">
                <h2 class="fw-bold col-md-8 mx-auto">Siap Memulai Perjalanan Suci Anda Bersama Kami?</h2>
                <p class="lead my-4 col-md-8 mx-auto" style="color: rgba(255,255,255,0.8) !important;">Hubungi kami untuk
                    konsultasi lebih lanjut atau langsung daftarkan diri Anda melalui formulir online.</p>
                <a href="/pendaftaran" class="btn btn-brand">Daftar Sekarang</a>
            </div>
        </div>
    </section>

@endsection