@extends('layouts.main')

@section('title', 'Berita & Artikel | KBIHU Aswaja')

@section('content')

    <!-- 1. Page Header -->
    <div class="py-5 text-center" style="background-color: #f0f4f2;">
        <div class="container">
            <h1 class="display-4 fw-bold">Berita & Artikel Haji</h1>
            <p class="lead text-muted col-lg-8 mx-auto">Informasi terkini, tips bermanfaat, dan panduan mendalam seputar
                perjalanan ibadah haji.</p>
        </div>
    </div>

    <!-- 2. Konten Utama: Grid Artikel Elegan -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="row g-4">

                <!-- CONTOH ARTIKEL DUMMY (NANTI AKAN DI-LOOP DARI DATABASE) -->

                <!-- Artikel 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card article-card h-100">
                        <img src="https://images.unsplash.com/photo-1602157125799-73e488f28584?q=80&w=1939&auto=format=fit=crop"
                            class="article-card-img" alt="Artikel 1">
                        <div class="card-body p-4 d-flex flex-column">
                            <span class="badge bg-success mb-2 align-self-start">Manasik</span>
                            <h5 class="card-title fw-bold mt-2">
                                <a href="#" class="text-decoration-none text-dark">Memahami Makna dan Keutamaan Wukuf di
                                    Arafah</a>
                            </h5>
                            <p class="card-text text-muted small mt-2">Wukuf di Arafah adalah puncak dari ibadah haji. Mari
                                kita selami makna spiritual di baliknya...</p>
                            <div class="mt-auto text-muted small">
                                Dipublikasikan pada 20 Mei 2024
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Artikel 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card article-card h-100">
                        <img src="https://images.unsplash.com/photo-1589923188900-85da55557763?q=80&w=1932&auto=format&fit=crop"
                            class="article-card-img" alt="Artikel 2">
                        <div class="card-body p-4 d-flex flex-column">
                            <span class="badge bg-success mb-2 align-self-start">Info Terkini</span>
                            <h5 class="card-title fw-bold mt-2">
                                <a href="#" class="text-decoration-none text-dark">Kebijakan Baru Pemerintah Arab Saudi
                                    untuk Haji 2025</a>
                            </h5>
                            <p class="card-text text-muted small mt-2">Beberapa kebijakan baru yang perlu diketahui oleh
                                para calon jamaah haji...</p>
                            <div class="mt-auto text-muted small">
                                Dipublikasikan pada 18 Mei 2024
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Artikel 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card article-card h-100">
                        <img src="https://images.unsplash.com/photo-1554232456-8727a6953534?q=80&w=2070&auto=format&fit=crop"
                            class="article-card-img" alt="Artikel 3">
                        <div class="card-body p-4 d-flex flex-column">
                            <span class="badge bg-success mb-2 align-self-start">Kisah Inspiratif</span>
                            <h5 class="card-title fw-bold mt-2">
                                <a href="#" class="text-decoration-none text-dark">Perjalanan Spiritual: Kisah Jamaah Tertua
                                    Tahun Ini</a>
                            </h5>
                            <p class="card-text text-muted small mt-2">Sebuah kisah inspiratif tentang semangat dan
                                keteguhan hati seorang nenek berusia 90 tahun...</p>
                            <div class="mt-auto text-muted small">
                                Dipublikasikan pada 15 Mei 2024
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tambahkan lebih banyak artikel di sini dengan menyalin-tempel blok di atas -->

            </div>

            <!-- Paginasi Modern -->
            <nav aria-label="Page navigation" class="mt-5 pt-4">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                </ul>
            </nav>
        </div>
    </section>

@endsection