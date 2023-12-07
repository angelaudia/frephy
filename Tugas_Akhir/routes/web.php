<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing_page');
});

Route::get('/login', function () {
    return view('buat_akun.login');
});

Route::get('/register', function () {
    return view('buat_akun.register');
});


// Mahasiswa
Route::get('/beranda-m', function () {
    return view('mahasiswa.mberanda');
});
Route::get('/tes', function () {
    return view('mahasiswa.tes');
});
Route::get('/quiz', function () {
    return view('mahasiswa.quiz');
});
Route::get('/hasil', function () {
    return view('mahasiswa.hasil-q');
});
Route::get('/konselor-sebaya', function () {
    return view('mahasiswa.sebaya');
});
Route::get('/konselor-profesional', function () {
    return view('mahasiswa.profesional');
});
Route::get('/riwayat', function () {
    return view('mahasiswa.riwayat');
});
Route::get('/booking', function () {
    return view('mahasiswa.booking');
});

