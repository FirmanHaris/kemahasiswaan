<?php

use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LemawaController;
use App\Http\Controllers\OrmawaController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\UserController;
use App\Models\Berita;
use App\Models\Ormawa;
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

// Route::get('/', function () {
//     return view('frontend.__beranda');
// })->name('beranda');
Route::get('/', [BerandaController::class, 'beranda'])->name('beranda');
Route::get('/dokumen', function () {
    return view('frontend.__dokumen');
})->name('dokumen');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi');
Route::get('/beasiswa', [BeasiswaController::class, 'index'])->name('beasiswa');
Route::get('/ormawa', [OrmawaController::class, 'index'])->name('ormawa');
Route::get('/lemawa', [LemawaController::class, 'index'])->name('lemawa');
Route::get('/login', [UserController::class, 'getViewLogin'])->name('login');
Route::post('/loginAct', [UserController::class, 'loginAuth'])->name('loginAct');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/berita/detail/{id}', [BeritaController::class, 'detailShow']);
Route::get('/ormawa/detail/{id}', [OrmawaController::class, 'detailShow']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.__dashboard');
    })->name('dashboard');
    Route::get('/berita/create', [BeritaController::class, 'showCreate'])->name('formadd');
    Route::post('/berita/create', [BeritaController::class, 'create'])->name('insertBerita');
    Route::get('/berita/formUpdate/{id}', [BeritaController::class, 'showUpdate']);
    Route::put('/berita/update/{id}', [BeritaController::class, 'update']);
    Route::delete('/berita/delete/{id}', [BeritaController::class, 'delete']);

    Route::controller(PrestasiController::class)->group(function () {
        Route::get('/prestasi/create', 'showCreate')->name('formadd_prestasi');
        Route::post('/prestasi/create', 'create')->name('insert_prestasi');
        Route::get('/prestasi/formUpdate/{id}', 'showUpdate');
        Route::put('/prestasi/update/{id}', 'update');
        Route::delete('prestasi/delete/{id}', 'delete');
    });

    Route::controller(BeasiswaController::class)->group(function () {
        Route::get('/beasiswa/create', 'showCreate')->name('formadd_beasiswa');
        Route::post('/beasiswa/create', 'create')->name('insert_beasiswa');
        Route::get('/beasiswa/formUpdate/{id}', 'showUpdate');
        Route::put('/beasiswa/update/{id}', 'update');
        Route::delete('/beasiswa/delete/{id}', 'delete');
    });
    Route::controller(OrmawaController::class)->group(function () {
        Route::get('/ormawa/create', 'showCreate')->name('formadd_ormawa');
        Route::post('/ormawa/create', 'create')->name('insert_ormawa');
        Route::get('/ormawa/update/{id}', 'showUpdate');
        Route::put('/ormawa/update/{id}', 'update');
        Route::delete('/ormawa/delete/{id}', 'delete');
    });
});
