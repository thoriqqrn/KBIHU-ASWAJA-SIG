@extends('layouts.main')

@section('title', 'Ibadah Haji dan Umroh')

@section('content')
<style>
    .hero-section {
        background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://i.imgur.com/k6lP0Wd.png'); /* Ganti dengan URL gambar Anda */
        background-size: cover;
        background-position: center;
        color: white;
        padding: 150px 0;
    }
</style>

<div class="hero-section text-center">
    <div class="container">
        <p class="lead">KBIHU Annisaa</p>
        <h1 class="display-3 fw-bold">Ibadah Haji dan Umroh</h1>
        <p class="lead my-4">Perjalanan terbaik Anda dalam menjalankan ibadah Haji dan Umroh.<br>
        Sebagai bentuk upaya khidmat kepada para tamu Allah, KBIHU Annisaa menjadi pilihan yang tepat Anda.</p>
        <a href="#" class="btn btn-warning btn-lg fw-bold px-4">Daftar Sekarang</a>
    </div>
</div>

<!-- Nanti bagian lain bisa ditambahkan di sini -->
<div class="container my-5">
    <h2>Konten Lainnya</h2>
    <p>Bagian untuk fitur-fitur program, testimoni, galeri, dll.</p>
</div>
@endsection