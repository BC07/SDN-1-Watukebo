<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\TabelsiswaController;
use App\Http\Controllers\DatasiswaController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProgramSekolahController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\EkstrakurikulerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin', function () {
    return view('index');
})->name('dashboard.index');

Route::get('/informasi', function () {
    return view('informasi');
})->name('informasi.index');

Route::get('/program', function () {
    return view('program');
})->name('program.index');

Route::resource('sambutans', SambutanController::class);
Route::resource('beranda', BerandaController::class);
Route::resource('tabelsiswa', TabelsiswaController::class);
Route::resource('program', ProgramController::class);
Route::resource('programsekolah', ProgramSekolahController::class);
Route::resource('sekolah', SekolahController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('ekstrakurikulers', EkstrakurikulerController::class);

Route::get('/',[BerandaController::class, 'index'])->name('beranda.index');
Route::get('/datasiswa',[DatasiswaController::class, 'index'])->name('datasiswa.index');
Route::get('/admin',[DatasiswaController::class, 'show'])->name('dashboard.index');
Route::get('/program',[ProgramController::class, 'index'])->name('program.index');
Route::get('/sekolah',[SekolahController::class, 'index'])->name('sekolah.index');
Route::get('/siswa',[SiswaController::class, 'index'])->name('siswa.index');
Route::get('/programsekolah', [ProgramSekolahController::class, 'index'])->name('programsekolah.index');