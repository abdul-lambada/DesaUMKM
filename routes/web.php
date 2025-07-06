<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', [\App\Http\Controllers\PublicController::class, 'home'])->name('public.home');

// Redirect dashboard Breeze ke Filament
Route::redirect('/dashboard', '/admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/wisata', [\App\Http\Controllers\PublicController::class, 'wisata'])->name('public.wisata');
Route::get('/umkm', [\App\Http\Controllers\PublicController::class, 'umkm'])->name('public.umkm');
Route::get('/produk', [\App\Http\Controllers\PublicController::class, 'produk'])->name('public.produk');
Route::get('/event', [\App\Http\Controllers\PublicController::class, 'event'])->name('public.event');
Route::get('/homestay', [\App\Http\Controllers\PublicController::class, 'homestay'])->name('public.homestay');
Route::get('/artikel', [\App\Http\Controllers\PublicController::class, 'artikel'])->name('public.artikel');
Route::get('/galeri', [\App\Http\Controllers\PublicController::class, 'galeri'])->name('public.galeri');
Route::get('/komunitas', [\App\Http\Controllers\PublicController::class, 'komunitas'])->name('public.komunitas');
Route::get('/booking', [\App\Http\Controllers\PublicController::class, 'booking'])->name('public.booking');
Route::get('/feedback', [\App\Http\Controllers\PublicController::class, 'feedback'])->name('public.feedback');
Route::get('/surat-online', [\App\Http\Controllers\PublicController::class, 'suratOnline'])->name('public.suratOnline');
Route::get('/mappoint', [\App\Http\Controllers\PublicController::class, 'mappoint'])->name('public.mappoint');

require __DIR__.'/auth.php';
