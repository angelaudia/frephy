<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
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

// Halaman Pertama
Route::get('/', function () {
    return view('landing_page.landingPage');
})->middleware('guest');

// Route untuk login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');

// Route untuk proses register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('store');

// Route untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Mahasiswa
Route::get('/beranda-m', function () {
    return view('mahasiswa.mberanda');
})->name('beranda-m')->middleware('auth');

Route::get('/tes-m', function () {
    return view('mahasiswa.tes');
})->middleware('auth');

Route::get('/quiz-m', [QuizController::class, 'index'])->middleware('auth');

Route::get('/hasil-m', function () {
    return view('mahasiswa.hasil-q');
})->middleware('auth');

Route::get('/konselor-sebaya-m', function () {
    return view('mahasiswa.sebaya');
})->middleware('auth');

Route::get('/konselor-profesional-m', function () {
    return view('mahasiswa.profesional');
})->middleware('auth');

Route::get('/riwayat-m', function () {
    return view('mahasiswa.riwayat');
})->middleware('auth');

Route::get('/booking', function () {
    return view('mahasiswa.booking');
})->middleware('auth');

// Konselor
Route::get('/beranda-p', function () {
    return view('psikolog.pberanda');
})->name('beranda-p')->middleware('auth');

Route::get('/riwayat-p', function () {
    return view('psikolog.priwayat');
})->middleware('auth');

// Admin
Route::get('/beranda-a', function () {
    return view('admin.aberanda');
})->name('beranda-a')->middleware('auth');

Route::get('/akun-konselor', function () {
    return view('admin.akonselor')->middleware('auth');
});



