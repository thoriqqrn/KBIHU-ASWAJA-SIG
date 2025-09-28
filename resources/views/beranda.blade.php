@extends('layouts.main')

@section('title', 'Selamat Datang di KBIHU Aswaja')

@section('content')

<!-- 1. Hero Section -->
<div class="hero-section d-flex align-items-center">
    <div class="container">
        <p class="lead text-uppercase" style="letter-spacing: 2px;">Bimbingan Haji Sesuai Sunnah</p>
        <h1 class="display-2">Meraih Haji Mabrur Bersama </h1>
        <h1 class="display-2">KBIHU Aswaja</h1>
        <p class="lead my-4 col-md-8 mx-auto">Kami siap menjadi mitra perjalanan spiritual Anda ke Baitullah dengan bimbingan intensif, pelayanan prima, dan asas kekeluargaan.</p>
        <a href="/pendaftaran" class="btn btn-brand mt-3">Daftar Sekarang</a>
    </div>
</div>

<!-- 2. Tentang Kami (Profil Singkat) -->
<section class="py-5 my-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <img src="{{ asset('images/foto-pengurus.jpg') }}" class="img-fluid rounded-custom shadow-lg card-hover-effect" alt="Foto Pengurus KBIHU Aswaja">
            </div>
            <div class="col-lg-6">
                <h6 class="text-success text-uppercase">Tentang Kami</h6>
                <h2 class="display-5 fw-bold mb-3">Lembaga Bimbingan Haji Terpercaya</h2>
                <p class="text-muted">KBIHU Aswaja adalah lembaga bimbingan ibadah haji yang berkomitmen untuk memberikan pendampingan terbaik bagi para calon jamaah. Dengan visi untuk mewujudkan jamaah yang mandiri dan berilmu, kami menyelenggarakan manasik yang komprehensif.</p>
                <p class="text-muted">Dipandu oleh pengurus yang amanah dan berpengalaman, kami siap menjadi mitra perjalanan spiritual Anda ke Baitullah.</p>
                <a href="/tentang-kami" class="btn btn-success mt-3 px-4">Kenali Kami Lebih Dekat</a>
            </div>
        </div>
    </div>
</section>

@endsection