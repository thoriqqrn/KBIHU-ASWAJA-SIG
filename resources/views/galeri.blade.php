@extends('layouts.main')

@section('title', 'Galeri Kegiatan | KBIHU Aswaja')

@section('content')

    <!-- 1. Page Header -->
    <div class="py-5 text-center" style="background-color: #f0f4f2;">
        <div class="container">
            <h1 class="display-4 fw-bold">Galeri Kegiatan</h1>
            <p class="lead text-muted col-lg-8 mx-auto">Dokumentasi perjalanan dan bimbingan ibadah haji bersama KBIHU
                Aswaja dari tahun ke tahun.</p>
        </div>
    </div>

    <!-- 2. Galeri Section -->
    <section class="py-5 my-5">
        <div class="container">
            <!-- Filter Bar dengan Dropdown Modern -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <h2 class="fw-bold mb-0" id="gallery-year-title">Galeri Tahun 2025</h2>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end">
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle px-4 py-2" type="button" id="galleryDropdownButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="me-2">Pilih Tahun:</span>
                            <span id="dropdownMenuButtonText" class="fw-bold">2025</span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="galleryDropdownButton">
                            <li><a class="dropdown-item year-filter-item active" href="#" data-year="2025"><i
                                        class="fas fa-check me-2"></i> 2025</a></li>
                            <li><a class="dropdown-item year-filter-item" href="#" data-year="2024"><i
                                        class="fas fa-check me-2"></i> 2024</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Konten Galeri -->
            <div>
                <!-- Galeri untuk Tahun 2025 -->
                <div class="gallery-content" id="year-2025">
                    <div class="row g-4">
                        @foreach ($gallery2025 as $image)
                            <div class="col-lg-4 col-md-6">
                                <a href="#" class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal"
                                    data-img-src="{{ asset('images/' . $image['src']) }}"
                                    data-img-title="{{ $image['title'] }} (2025)">
                                    <img src="{{ asset('images/' . $image['src']) }}" class="img-fluid"
                                        alt="{{ $image['title'] }}">
                                    <div class="gallery-overlay">
                                        <div class="gallery-text">
                                            <i class="fas fa-search-plus"></i>
                                            <h5 class="mb-0 mt-2">{{ $image['title'] }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Galeri untuk Tahun 2024 -->
                <div class="gallery-content" id="year-2024" style="display: none;">
                    <div class="row g-4">
                        @foreach ($gallery2024 as $image)
                            <div class="col-lg-4 col-md-6">
                                <a href="#" class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal"
                                    data-img-src="{{ asset('images/' . $image['src']) }}"
                                    data-img-title="{{ $image['title'] }} (2024)">
                                    <img src="{{ asset('images/' . $image['src']) }}" class="img-fluid"
                                        alt="{{ $image['title'] }}">
                                    <div class="gallery-overlay">
                                        <div class="gallery-text">
                                            <i class="fas fa-search-plus"></i>
                                            <h5 class="mb-0 mt-2">{{ $image['title'] }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal (Lightbox) untuk Galeri -->
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="galleryModalLabel">Detail Gambar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" class="img-fluid w-100" alt="Detail Gambar Galeri">
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <!-- Script ini sekarang berada di layout utama (main.blade.php) -->
@endpush