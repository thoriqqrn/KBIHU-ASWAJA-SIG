@extends('layouts.main')

@section('title', 'Tentang Kami | KBIHU Aswaja')

@section('content')

    <!-- 1. Page Header -->
    <div class="py-5 text-center" style="background-color: #f0f4f2;">
        <div class="container">
            <h1 class="display-4 fw-bold">Tentang KBIHU Aswaja</h1>
            <p class="lead text-muted col-lg-8 mx-auto">Mengenal lebih dekat lembaga bimbingan haji Anda yang amanah,
                profesional, dan berlandaskan Ahlussunnah wal Jama'ah.</p>
        </div>
    </div>

    <!-- 2. Profil Lembaga -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <img src="{{ asset('images/foto-pengurus.jpg') }}"
                        class="img-fluid rounded-custom shadow-lg card-hover-effect" alt="Profil KBIHU Aswaja">
                </div>
                <div class="col-lg-6">
                    <h6 class="text-success text-uppercase">Profil Kami</h6>
                    <h2 class="display-5 fw-bold mb-3">Sejarah & Legalitas</h2>
                    <p class="text-muted">KBIHU Aswaja didirikan pada tahun [Tahun Berdiri] atas dasar keprihatinan untuk
                        memberikan bimbingan manasik haji yang intensif dan sesuai sunnah. Kami adalah lembaga resmi yang
                        terdaftar di Kementerian Agama dengan nomor izin [Nomor Izin Operasional].</p>
                    <p class="text-muted">Sejak awal berdiri, kami telah berkomitmen untuk melayani para tamu Allah dengan
                        pelayanan prima, transparansi, dan asas kekeluargaan, demi membantu jamaah meraih predikat haji yang
                        mabrur.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Visi & Misi -->
    <section class="py-5" style="background-color: #f0f4f2;">
        <div class="container">
            <div class="text-center">
                <h2 class="fw-bold">Visi & Misi Kami</h2>
                <p class="lead text-muted">Landasan dan tujuan kami dalam melayani jamaah.</p>
            </div>
            <div class="row mt-5 g-4">
                <div class="col-lg-6">
                    <div class="bg-white p-5 rounded-custom shadow-sm h-100 card-hover-effect">
                        <div class="d-flex align-items-center mb-3">
                            <div class="fs-1 text-success me-4"><i class="fa-solid fa-eye"></i></div>
                            <h3 class="fw-bold">Visi</h3>
                        </div>
                        <p class="text-muted">Mewujudkan jamaah haji yang MANDIRI, MABRUR BERSAMA dan BERAKHLAQUL KARIMAH
                            menurut akidah dan ibadah Ahlussunnah wal Jama’ah.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-white p-5 rounded-custom shadow-sm h-100 card-hover-effect">
                        <div class="d-flex align-items-center mb-3">
                            <div class="fs-1 text-success me-4"><i class="fa-solid fa-bullseye"></i></div>
                            <h3 class="fw-bold">Misi</h3>
                        </div>
                        <ul class="text-muted" style="list-style-position: inside; padding-left: 0;">
                            <li>Memberikan bimbingan dan pelatihan manasik haji dan umroh sebelum dan selama melaksanakan
                                ibadah haji secara optimal.</li>
                            <li>Menyediakan sarana informasi dan pembelajaran bagi jamaah agar dapat memaksimalkan persiapan
                                pelaksanaan ibadah haji.</li>
                            <li>Membangun persaudaraan, kekompakan, kebersamaan dan keakraban dalam pembimbingan ibadah haji
                                dan umrah.</li>
                            <li>Mendorong terwujudnya jamaah haji yang yang memiliki pribadi istiqomah, sabar, tawadlu’,
                                peduli dan Ikhlas.</li>
                            <li>Menyelenggarakan kegiatan ke-Islaman pasca ibadah haji untuk mempererat ikatan silaturahmi
                                alumni KBIH ASWAJA.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Tim Pengurus -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="text-center">
                <h2 class="fw-bold">Tim Pembimbing & Pengurus</h2>
                <p class="lead text-muted">Dipandu oleh para asatidz yang ahli dan berpengalaman.</p>
            </div>

            <div class="row mt-5 g-5 justify-content-center">
                <!-- Kartu Ketua -->
                <div class="col-lg-3 col-md-5">
                    <div class="profile-card">
                        <img src="{{ asset('images/foto-ketua.jpg') }}" class="profile-card-img" alt="Ketua KBIHU Aswaja">
                        <div class="profile-card-body">
                            <h5 class="fw-bold mb-0">Nixo Armadani, ST.</h5>
                            <p class="mb-0 small" style="color: rgba(255,255,255,0.8);">Ketua KBIHU ASWAJA</p>
                        </div>
                    </div>
                </div>

                <!-- Kartu Pembimbing 1 -->
                <div class="col-lg-3 col-md-5">
                    <div class="profile-card">
                        <img src="{{ asset('images/foto-pembimbing-1.jpg') }}" class="profile-card-img"
                            alt="Pembimbing KBIHU Aswaja">
                        <div class="profile-card-body">
                            <h5 class="fw-bold mb-0">K.H. MUH. SUHAFIK, MA</h5>
                            <p class="mb-0 small" style="color: rgba(255,255,255,0.8);">Pembimbing</p>
                        </div>
                    </div>
                </div>

                <!-- Kartu Pembimbing 2 -->
                <div class="col-lg-3 col-md-5">
                    <div class="profile-card">
                        <img src="{{ asset('images/foto-pembimbing-2.jpg') }}" class="profile-card-img"
                            alt="Pembimbing KBIHU Aswaja">
                        <div class="profile-card-body">
                            <h5 class="fw-bold mb-0">K.H. AKHMAD KHAMDANI, MA.</h5>
                            <p class="mb-0 small" style="color: rgba(255,255,255,0.8);">Pembimbing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection