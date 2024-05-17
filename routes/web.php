<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BppSbController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanBarangKeluarController;
use App\Http\Controllers\LaporanBarangMasukController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\UserController;
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


Route::get('/login', [AuthController::class, 'index'])->middleware('sudahLogin');
Route::post('/login/aksi', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);


Route::get('/', [DashboardController::class, 'index'])->middleware('belumLogin');


Route::get('barang', [BarangController::class, 'index'])->name('barang.index')->middleware('belumLogin');
Route::post('store', [BarangController::class, 'store']);
Route::post('edit', [BarangController::class, 'edit']);
Route::post('delete', [BarangController::class, 'destroy']);

Route::get('user', [UserController::class, 'index'])->name('user.index')->middleware('belumLogin');
Route::post('user-store', [UserController::class, 'store'])->name('user.store');
Route::post('user-edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('user-delete', [UserController::class, 'destroy'])->name('user.delete');


Route::get('satuan', [SatuanController::class, 'index'])->name('satuan.index')->middleware('belumLogin');
Route::post('satuan-store', [SatuanController::class, 'store'])->name('satuan.store');
Route::post('satuan-edit', [SatuanController::class, 'edit'])->name('satuan.edit');
Route::post('satuan-delete', [SatuanController::class, 'destroy'])->name('satuan.delete');


Route::get('barang-masuk', [BarangMasukController::class, 'index'])->name('masuk.index')->middleware('belumLogin');
Route::get('barang-masuk/{id}', [BarangMasukController::class, 'getBarang']);
Route::post('barang-masuk-store', [BarangMasukController::class, 'store'])->name('masuk.store');
Route::post('barang-masuk-edit', [BarangMasukController::class, 'edit'])->name('masuk.edit');
Route::post('barang-masuk-delete', [BarangMasukController::class, 'destroy'])->name('masuk.delete');


Route::get('barang-keluar', [BarangKeluarController::class, 'index'])->name('keluar.index')->middleware('belumLogin');
Route::get('barang-keluar/{id}', [BarangKeluarController::class, 'getBarang']);
Route::post('barang-keluar-store', [BarangKeluarController::class, 'store'])->name('keluar.store');
Route::post('barang-keluar-edit', [BarangKeluarController::class, 'edit'])->name('keluar.edit');
Route::post('barang-keluar-delete', [BarangKeluarController::class, 'destroy'])->name('keluar.delete');

Route::get('bpp-sb', [BppSbController::class, 'index'])->name('bppsb.index');
Route::get('bpp-sb-tambah', [BppSbController::class, 'create'])->name('bppsb.create');
Route::get('bpp-sb-store', [BppSbController::class, 'store'])->name('bppsb.store');
Route::get('bpp-sb-edit', [BppSbController::class, 'edit'])->name('bppsb.edit');
Route::get('bpp-sb-delete', [BppSbController::class, 'delete'])->name('bppsb.delete');

Route::get('laporan-barang-masuk', [LaporanBarangMasukController::class, 'index'])->name('laporanIn.index')->middleware('belumLogin');
Route::get('laporan-barang-keluar', [LaporanBarangKeluarController::class, 'index'])->name('laporanOut.index')->middleware('belumLogin');


Route::get('pengaturan', [PengaturanController::class, 'index'])->name('pengaturan.index')->middleware('belumLogin');
