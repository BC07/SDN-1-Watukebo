<?php

use App\Http\Controllers\AccountController;
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
use App\Http\Controllers\LinkDaftarController;

use App\Http\Controllers\LoginController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\GaleriTentangController;
use App\Http\Controllers\KelasDeskripsiController;
use App\Http\Controllers\PrestasiController;




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

// Route::get('/admin', function () {
//     return view('index');
// })->name('dashboard.index');

Route::get('/informasi', function () {
    return view('informasi');
})->name('informasi.index');


Route::get('/program', function () {
    return view('program');
})->name('program.index');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang.index');


Route::resource('sambutans', SambutanController::class);
Route::resource('beranda', BerandaController::class);
Route::resource('tabelsiswa', TabelsiswaController::class);
Route::resource('linkdaftars', LinkDaftarController::class);


Route::resource('galeritentang', GaleriTentangController::class);
Route::resource('kelasdeskripsi', KelasDeskripsiController::class);
Route::resource('prestasi', PrestasiController::class);

Route::resource('program', ProgramController::class);
Route::resource('programsekolah', ProgramSekolahController::class);
Route::resource('sekolah', SekolahController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('ekstrakurikulers', EkstrakurikulerController::class);

Route::get('/',[BerandaController::class, 'index'])->name('beranda.index');
Route::get('/datasiswa',[DatasiswaController::class, 'index'])->name('datasiswa.index');
Route::get('/admin',[DatasiswaController::class, 'show'])->name('dashboard.index');
Route::get('/tentang',[GaleriTentangController::class, 'show'])->name('tentang.index');
Route::get('/program',[ProgramController::class, 'index'])->name('program.index');
Route::get('/sekolah',[SekolahController::class, 'index'])->name('sekolah.index');
Route::get('/siswa',[SiswaController::class, 'index'])->name('siswa.index');
Route::get('/programsekolah', [ProgramSekolahController::class, 'index'])->name('programsekolah.index');


Route::get('/',[BerandaController::class, 'index'])->name('beranda.index');
Route::get('/datasiswa',[DatasiswaController::class, 'index'])->name('datasiswa.index');

// databse
// Route::get('/admin',[DatasiswaController::class, 'show'])->name('dashboard.index');
// login
Route::get('/admin',[DatasiswaController::class, 'show'])->name('dashboard.index');


Route::get('/tentang',[GaleriTentangController::class, 'show'])->name('tentang.index');

Route::get('/login', [LoginController::class, 'index'])->name('auth.index');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');
Route::prefix('admin')->middleware('auth.admin')->group(function(){
    Route::get('/', [DatasiswaController::class, 'show'])->name('dashboard.index');

    Route::get('account', [AccountController::class, 'index'])->name('account.index');
    Route::get('account/create', [AccountController::class, 'create'])->name('account.create');
    Route::post('account/store', [AccountController::class, 'store'])->name('account.store');
    Route::get('aaccount/edit/{id}', [AccountController::class, 'edit'])->name('account.edit');
    Route::put('account/update/{id}', [AccountController::class, 'update'])->name('account.update');
    Route::delete('account/destroy/{id}', [AccountController::class, 'destroy'])->name('account.destroy');
});

// Taro routing di atas sebelum "/login"

