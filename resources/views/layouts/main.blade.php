<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KBIHU Aswajaa - @yield('title')</title>
    
    <!-- Memanggil CSS yang dikelola oleh Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <!-- Ganti dengan logo Anda nanti -->
                <img src="https://via.placeholder.com/100x40.png?text=Logo" alt="Logo KBIHU">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fw-bold">
                    <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Program</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Data Jamaah</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Testimonial</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pendaftaran</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="text-center py-4 bg-light mt-5">
        <div class="container">
            <p class="mb-0">&copy; 2024 KBIHU Aswajaa. All Rights Reserved.</p>
        </div>
    </footer>
    
</body>
</html>