<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
</p>

# UTS PWEB GENAP 25/26 - Mini Proyek Laravel

Proyek ini dibuat untuk memenuhi Ujian Tengah Semester (UTS) mata kuliah Pemrograman Web. Proyek ini merupakan aplikasi web sederhana yang dibangun menggunakan *framework* Laravel murni, fokus pada implementasi dasar *routing*, *controller*, dan *Blade template engine* tanpa menggunakan *database*.

- **Nama:** `Samuel Gurning`
- **NIM:** `242410103012`
- **Kelas:** `A IF`

---

## 🚀 Fitur Utama

Proyek ini mengimplementasikan semua fungsionalitas yang disyaratkan dalam dokumen soal UTS:

1.  **Halaman Login:**
    * Form login sederhana dengan input `username` dan `password`.
    * Mengirimkan data `username` ke halaman Dashboard menggunakan *query parameter* (`?username=...`) setelah *submit*.

2.  **Halaman Dashboard:**
    * Menampilkan pesan selamat datang yang dinamis, mengambil nama dari *query parameter* di URL.

3.  **Halaman Pengelolaan:**
    * Menampilkan daftar data (Inventaris Barang) yang bersumber dari *array* di dalam `PageController`.
    * Data ditampilkan dalam tabel yang responsif (bisa di-*scroll* horizontal di layar kecil).

4.  **Halaman Profile:**
    * Menampilkan detail profil statis dan dinamis.
    * Data `username` diambil dari *query parameter* di URL, sama seperti Dashboard.

5.  **Struktur Blade Lengkap:**
    * Menggunakan *layout master* (`layouts/app.blade.php`).
    * Mengimplementasikan `@extends`, `@section`, dan `@yield` untuk struktur halaman.
    * Menggunakan `@include` untuk memanggil *partial* (judul halaman).
    * Menggunakan *Blade Component* (`x-navbar` dan `x-footer`) untuk elemen yang dapat digunakan kembali.

6.  **Desain Responsif:**
    * Tampilan dirancang agar tetap rapi dan fungsional di perangkat *desktop* maupun *mobile* (ponsel).

---

## 🛠️ Teknologi yang Digunakan

-   **Framework:** Laravel (Disarankan Laravel 11)
-   **Bahasa:** PHP 8+
-   **Frontend:**
    -   HTML5
    -   CSS3 (Native, menggunakan Flexbox dan Media Queries untuk responsivitas)
-   **Template Engine:** Blade

---
