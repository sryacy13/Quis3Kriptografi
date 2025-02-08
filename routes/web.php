<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRCodeController;

// Route ke halaman default yang mengarah ke view qrcode.qr-code
Route::get('/', function () {
    return view('qrcode.qrcode'); // Menampilkan halaman awal
});

// Route untuk menampilkan form QR Code
Route::get('/qrcode', [QRCodeController::class, 'qrcode']); 

// Route untuk menangani proses pembuatan QR Code
Route::get('/generate-qrcode', [QRCodeController::class, 'qrcode']);