# Project Laravel - QR Code Generator

## 📌Penjelasan Singkat tentang Project
Project ini adalah sebuah aplikasi QR Code Generator berbasis Laravel yang memungkinkan pengguna untuk membuat QR Code secara dinamis. Pengguna dapat memasukkan URL atau teks, memilih ukuran QR Code, lalu mengunduh hasilnya dalam format gambar. Aplikasi ini memiliki tampilan yang menarik dan responsif dengan Bootstrap, serta menggunakan QRCode.js untuk menghasilkan kode QR secara instan.

## 📌Langkah-Langkah Instalasi dan Menjalankan Project
1️⃣ Clone Repository
 # Unduh project dari GitHub dengan menjalankan perintah berikut:
git clone https://github.com/sryacy13/Quis3Kriptografi.git

cd Quis3Kriptografi

2️⃣ Install Dependencies
# Jalankan perintah berikut untuk menginstal semua dependency yang dibutuhkan: 
composer install
npm install && npm run dev

3️⃣ Konfigurasi Environment
 # Duplikat file .env.example dan ubah menjadi .env :
 cp .env.example .env
# Atur konfigurasi database di dalam file .env sesuai kebutuhan.
# Generate application key:
  php artisan key:generate

4️⃣ Setup Database
# Jalankan migrasi untuk membuat tabel di database:
php artisan migrate

5️⃣ Menjalankan Aplikasi
 # Jalankan server Laravel dengan perintah:
   php artisan serve
 # Akses aplikasi di browser melalui http://127.0.0.1:8000.







