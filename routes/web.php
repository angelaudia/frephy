<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Models\question;
use App\Models\answer;

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
    return view('landing_page.landingPage');
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
Route::get('/tes-m', function () {
    return view('mahasiswa.tes');
});
Route::get('/quiz-m', [QuizController::class, 'index']);

Route::get('/hasil-m', function () {
    return view('mahasiswa.hasil-q');
});
Route::get('/konselor-sebaya-m', function () {
    return view('mahasiswa.sebaya');
});
Route::get('/konselor-profesional-m', function () {
    return view('mahasiswa.profesional');
});
Route::get('/riwayat-m', function () {
    return view('mahasiswa.riwayat');
});
Route::get('/booking', function () {
    return view('mahasiswa.booking');
});

// Konselor
Route::get('/beranda-p', function () {
    return view('psikolog.pberanda');
});
Route::get('/riwayat-p', function () {
    return view('psikolog.priwayat');
});

// Admin
Route::get('/beranda-a', function () {
    return view('admin.aberanda');
});
Route::get('/akun-konselor', function () {
    return view('admin.akonselor');
});



