<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'KBIHU Aswaja')</title>

    <!-- Bootstrap & Font Awesome CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- Google Fonts dari CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display.swap"
        rel="stylesheet">

    <!-- CSS Kustom Inline -->
    <style>
        /* 1. VARIABEL & GLOBAL */
        :root {
            --primary-color: #60AD6E;
            --primary-rgb: 96, 173, 110;
            --primary-darker: #4a8c58;
            --secondary-color: #f7c42e;
            --dark-color: #2c3e50;
            --bs-success: var(--primary-color);
            --bs-success-rgb: 96, 173, 110;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark-color);
            background-color: #fdfdfd;
        }

        main {
            padding-top: 100px;
        }

        /* 2. LAYOUT: NAVBAR & FOOTER */
        .navbar {
            transition: all 0.3s ease;
            background-color: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            border-radius: 0 0 20px 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.12);
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-top: 0;
        }

        .navbar .navbar-brand {
            color: var(--primary-color);
            font-weight: 700;
        }

        .navbar .nav-link {
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link.active {
            color: var(--primary-color);
            font-weight: 600;
        }

        footer {
            background-color: var(--dark-color);
        }

        footer a {
            text-decoration: none;
            color: rgba(255, 255, 255, 0.7);
            transition: color 0.3s;
        }

        footer a:hover {
            color: var(--primary-color) !important;
        }

        .footer-map-container {
            height: 180px;
            border-radius: 20px;
            overflow: hidden;
        }

        /* 3. HERO SECTION */
        .hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("{{ asset('images/foto-jamaah.jpg') }}");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            text-align: center;
            margin-top: -100px;
        }

        .hero-section h1 {
            font-weight: 700;
            font-size: 3.5rem;
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
        }

        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }
        }

        /* 4. KOMPONEN UMUM */
        .btn,
        .btn-brand {
            border-radius: 20px !important;
        }

        .btn-brand {
            background-color: var(--secondary-color);
            color: var(--dark-color);
            font-weight: 600;
            padding: 14px 35px;
            border: none;
            box-shadow: 0 4px 15px rgba(247, 196, 46, 0.3);
            transition: all 0.3s ease-in-out;
        }

        .btn-brand:hover {
            background-color: #ffca2c;
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 10px 30px rgba(247, 196, 46, 0.5);
        }

        .rounded-custom {
            border-radius: 20px !important;
        }

        .card-hover-effect {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-hover-effect:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08) !important;
        }

        .card-shadow-green {
            box-shadow: 0 10px 40px rgba(var(--primary-rgb), 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-shadow-green:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 50px rgba(var(--primary-rgb), 0.25);
        }

        /* 5. HALAMAN SPESIFIK */
        /* Tentang Kami */
        .profile-card {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            aspect-ratio: 9 / 16;
            box-shadow: 0 4px 12px rgba(var(--primary-rgb), 0.1), 0 10px 40px rgba(var(--primary-rgb), 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(var(--primary-rgb), 0.2), 0 15px 50px rgba(var(--primary-rgb), 0.25);
        }

        .profile-card-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .profile-card-body {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 1.5rem;
            color: white;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.9) 10%, rgba(0, 0, 0, 0) 100%);
        }

        /* Galeri */
        .gallery-item {
            display: block;
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
            aspect-ratio: 1 / 1;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.4s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-text {
            text-align: center;
            transform: translateY(15px);
            transition: transform 0.4s ease;
        }

        .gallery-item:hover .gallery-text {
            transform: translateY(0);
        }

        .gallery-text i {
            font-size: 2rem;
        }

        .dropdown-menu {
            border-radius: 20px;
            border: 1px solid #eee;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            padding: 0.5rem 0;
            margin-top: 0.75rem !important;
            opacity: 0;
            transform: translateY(-10px);
            transition: all 0.3s ease;
            display: block;
            visibility: hidden;
        }

        .dropdown-menu.show {
            opacity: 1;
            transform: translateY(0);
            visibility: visible;
        }

        .dropdown-item {
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            transition: background-color 0.2s ease, color 0.2s ease;
        }

        .dropdown-item i {
            width: 20px;
            opacity: 0;
            transition: opacity 0.2s ease;
        }

        .dropdown-item.active i,
        .dropdown-item:hover i {
            opacity: 1;
        }

        .dropdown-item.active,
        .dropdown-item:active {
            background-color: var(--primary-color);
            color: #fff;
        }

        .dropdown-item:hover {
            background-color: #f0f4f2;
            color: var(--primary-color);
        }

        /* Pendaftaran */
        .stepper .nav-link {
            pointer-events: none;
        }

        .stepper .nav-link .step-index {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #e9ecef;
            color: var(--dark-color);
            font-weight: 700;
            transition: all 0.3s ease;
        }

        .stepper .nav-link.active .step-index {
            background-color: var(--primary-color);
            color: #fff;
        }

        .form-control,
        .form-select {
            border-radius: 1rem;
            border: 1px solid #e2e8f0;
            padding: 0.75rem 1rem;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(var(--primary-rgb), 0.2);
        }

        .dropzone {
            border: 2px dashed #e2e8f0;
            border-radius: 1rem;
            background-color: #f8fafc;
            padding: 2rem 1rem;
            transition: all 0.2s ease-in-out;
            cursor: pointer;
        }

        .dropzone:hover {
            border-color: var(--primary-color);
            background-color: #f0f4f2;
        }

        .dropzone i {
            font-size: 2rem;
            color: #9ca3af;
        }

        /* 6. FLOATING BUTTON */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            color: #FFF;
            border-radius: 50%;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            animation: pulse 2s infinite;
            transition: all 0.3s ease;
        }

        .whatsapp-float:hover {
            color: #fff;
            transform: scale(1.1);
            animation: none;
        }

        @keyframes pulse {
            0% {
                transform: scale(0.95);
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 10px rgba(37, 211, 102, 0);
            }

            100% {
                transform: scale(0.95);
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
            }
        }

        @stack('styles')
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Logo KBIHU Aswaja" height="50">
                <span class="ms-3 fs-5" style="color: var(--primary-color); font-weight: 600;">KBIHU ASWAJA</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
                    </li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('program') ? 'active' : '' }}"
                            href="/program">Program</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('tentang-kami') ? 'active' : '' }}"
                            href="/tentang-kami">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('galeri') ? 'active' : '' }}"
                            href="/galeri">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('berita') ? 'active' : '' }}"
                            href="/berita">Berita & Artikel</a></li>
                </ul>
                <a href="/pendaftaran" class="btn btn-success fw-bold px-4">Daftar Sekarang</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- ==== FOOTER YANG SUDAH DIKEMBALIKAN ==== -->
    <footer id="kontak" class="text-white pt-5 pb-4">
        <div class="container text-center text-md-start">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-5 col-md-12">
                    <h5 class="text-uppercase mb-4 fw-bold" style="color: var(--primary-color);">KBIHU ASWAJA</h5>
                    <p>Bimbingan ibadah haji sesuai tuntunan Al-Qur'an dan As-Sunnah untuk membantu Anda meraih haji
                        yang mabrur.</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-uppercase mb-4 fw-bold">Hubungi Kami</h5>
                    <p class="mb-2"><i class="fas fa-home me-3"></i>Jl. RA. Kartini No. 158,
                        Gresik, Jawa Timur</p>
                    <p class="mb-2"><i class="fas fa-envelope me-3"></i> info@kbihuaswaja.com</p>
                    <p class="mb-2"><i class="fab fa-whatsapp me-3"></i> <a href="https://wa.me/6281281666811"
                            target="_blank" class="text-white">Chat via WhatsApp</a></p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-map-container shadow-lg">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.631309755614!2d112.64454727356959!3d-7.168548770337972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8004103c4064d%3A0xa073fc0a985bd785!2sJl.%20Kartini%20No.158%2C%20Injen%20Barat%2C%20Tlogobendung%2C%20Kec.%20Gresik%2C%20Kabupaten%20Gresik%2C%20Jawa%20Timur%2061122!5e0!3m2!1sid!2sid!4v1758189872305!5m2!1sid!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <p class="text-center">&copy; {{ date('Y') }} KBIHU Aswaja. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <a href="https://wa.me/6281234567890?text=Assalamualaikum,..." class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    @stack('scripts')
</body>

</html>