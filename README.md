<div align="center">
  <img width="150" src="https://github.com/user-attachments/assets/901ff4db-f985-4823-92ae-899ed340a1ac" />
    
  <h1 align="center">Website KBIHU Aswaja</h1>
  <p align="center">
    ✨ Website profil dan pendaftaran modern untuk Kelompok Bimbingan Ibadah Haji dan Umrah (KBIHU) Aswaja. ✨
  </p>
  
  <!-- Ganti placeholder di bawah ini dengan badge yang sesuai -->
  <p align="center">
    <img src="https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel" alt="Laravel">
    <img src="https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=for-the-badge&logo=bootstrap" alt="Bootstrap">
    <img src="https://img.shields.io/badge/License-MIT-green.svg?style=for-the-badge" alt="License">
  </p>
</div>

---

## 🕋 Tentang Proyek

Website KBIHU Aswaja adalah platform digital yang dirancang untuk menjadi pusat informasi dan pendaftaran bagi calon jamaah haji. Dibangun dengan teknologi web modern, website ini menawarkan pengalaman pengguna yang mulus, cepat, dan mudah diakses di berbagai perangkat. Tujuannya adalah untuk menyediakan sumber informasi yang terpercaya dan mempermudah proses administrasi bagi para tamu Allah.

<br>

### 📸 Screenshot Halaman Beranda

<img width="1896" height="873" alt="image" src="https://github.com/user-attachments/assets/2997c496-c97c-4a0f-9642-950d590d0fee" />

> **Tips:** Ambil screenshot halaman beranda, lalu unggah file gambarnya ke dalam folder `public/images` di proyek Anda. Ganti `[LINK-KE-SCREENSHOT...]` dengan `public/images/screenshot-beranda.png`.

---

## 🚀 Fitur Utama

-   ✅ **Desain Modern & Responsif:** Tampilan yang elegan dan berfungsi dengan baik di desktop, tablet, dan ponsel. 📱💻
-   ✅ **Halaman Beranda Dinamis:** *Hero section* dengan foto jamaah, profil singkat, dan *call-to-action* yang jelas.
-   ✅ **Halaman Tentang Kami:** Mencakup profil lembaga, Visi & Misi, serta galeri profil pengurus dengan desain kartu potret yang unik.
-   ✅ **Halaman Program:** Penjelasan detail mengenai program yang ditawarkan, seperti Penerimaan Jamaah dan Manasik Haji.
-   ✅ **Galeri Foto Interaktif:** Galeri kegiatan yang dikategorikan per tahun, lengkap dengan filter dropdown modern dan *lightbox* untuk melihat gambar lebih besar.
-   ✅ **Halaman Berita & Artikel:** Layout blog modern dengan artikel unggulan dan grid yang rapi untuk artikel lainnya.
-   ✅ **Formulir Pendaftaran Multi-Step:** Formulir pendaftaran canggih dengan validasi per langkah, progress bar, dan area *dropzone* untuk unggah dokumen.
-   ✅ **Floating Button WhatsApp:** Tombol WhatsApp mengambang dengan animasi untuk memudahkan calon jamaah menghubungi Anda.
-   ✅ **Integrasi Google Maps:** Peta lokasi kantor yang disematkan di footer.

---

## 🛠️ Teknologi yang Digunakan

Website ini dibangun menggunakan tumpukan teknologi yang andal dan modern:

| Teknologi | Deskripsi |
| :--- | :--- |
| **Laravel 10** | Framework PHP utama untuk membangun seluruh logika backend. |
| **PHP 8.2** | Bahasa pemrograman sisi server. |
| **Bootstrap 5.3** | Framework frontend untuk membangun UI yang responsif dan konsisten. |
| **Font Awesome** | Pustaka ikon untuk mempercantik tombol dan elemen UI lainnya. |
| **JavaScript (Vanilla)** | Digunakan untuk interaktivitas pada formulir dan galeri. |
| **MySQL** | Sistem manajemen database (direncanakan untuk integrasi backend). |

---

## ⚙️ Instalasi & Setup Lokal

Berikut adalah cara untuk menjalankan proyek ini di lingkungan lokal Anda:

1.  **Clone repositori ini:**
    ```bash
    git clone [URL-REPOSITORI-GITHUB-ANDA]
    cd [NAMA-FOLDER-PROYEK]
    ```

2.  **Install dependensi Composer:**
    ```bash
    composer install
    ```

3.  **Salin file environment:**
    ```bash
    cp .env.example .env
    ```

4.  **Generate key aplikasi Laravel:**
    ```bash
    php artisan key:generate
    ```

5.  **Konfigurasi file `.env`:**
    Buka file `.env` dan atur koneksi database Anda (DB_DATABASE, DB_USERNAME, DB_PASSWORD).

6.  **Jalankan migrasi database (jika sudah ada):**
    ```bash
    php artisan migrate
    ```

7.  **Jalankan server development:**
    ```bash
    php artisan serve
    ```
    Sekarang, buka browser Anda dan kunjungi `http://127.0.0.1:8000`.

---

## 🎯 Rencana Pengembangan

Proyek ini adalah fondasi frontend yang solid. Langkah selanjutnya adalah:
-   [ ] **Membangun Dashboard Admin:** Untuk mengelola semua konten dinamis (galeri, berita, pengurus) dan melihat data pendaftar.
-   [ ] **Integrasi Database:** Menghubungkan semua data *dummy* ke database MySQL.
-   [ ] **Fungsionalitas Penuh Formulir:** Memproses dan menyimpan data serta file yang diunggah dari formulir pendaftaran.
-   [ ] **Notifikasi Email:** Mengirim email konfirmasi otomatis kepada pendaftar dan notifikasi kepada admin.

---

Terima kasih telah mengunjungi repositori ini! 👋
