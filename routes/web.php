<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\LaptopController;

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
Route::get('/', function () {
    return view('index', [
    "title" => "Beranda"
    ]);
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/indexkas', [KasController::class, 'indexkas'])->name('kaskantor.index');
    Route::get('/createkas', [KasController::class, 'createkas'])->name('kaskantor.create');
    Route::post('/storekas', [KasController::class, 'storekas'])->name('kaskantor.store');
    Route::get('/showkas/{id}', [KasController::class, 'showkas'])->name('kaskantor.show');
    Route::post('/updatekas/{id}', [KasController::class, 'updatekas'])->name('kaskantor.update');
    Route::get('/destroykas/{id}', [KasController::class, 'destroykas'])->name('kaskantor.destroy');

    Route::get('/indexkaryawan', [KaryawanController::class, 'indexkaryawan'])->name('karyawankantor.index');
    Route::get('/createkaryawan', [KaryawanController::class, 'createkaryawan'])->name('karyawankantor.create');
    Route::post('/storekaryawan', [KaryawanController::class, 'storekaryawan'])->name('karyawankantor.store');
    Route::get('/showkaryawan/{id}', [KaryawanController::class, 'showkaryawan'])->name('karyawankantor.show');
    Route::post('/updatekaryawan/{id}', [KaryawanController::class, 'updatekaryawan'])->name('karyawankantor.update');
    Route::get('/destroykaryawan/{id}', [KaryawanController::class, 'destroykaryawan'])->name('karyawankantor.destroy');

    Route::get('/indexpengeluaran', [PengeluaranController::class, 'indexpengeluaran'])->name('pengeluarankantor.index');
    Route::get('/createpengeluaran', [PengeluaranController::class, 'createpengeluaran'])->name('pengeluarankantor.create');
    Route::post('/storepengeluaran', [PengeluaranController::class, 'storepengeluaran'])->name('pengeluarannkantor.store');
    Route::get('/showpengeluaran/{id}', [PengeluaranController::class, 'showpengeluaran'])->name('pengeluarankantor.show');
    Route::post('/updatepengeluaran/{id}', [PengeluaranController::class, 'updatepengeluaran'])->name('pengeluarankantor.update');
    Route::get('/destroypengeluaran/{id}', [PengeluaranController::class, 'destroypengeluaran'])->name('pengeluarankantor.destroy');

    Route::get('/indexlaptop', [LaptopController::class, 'indexlaptop'])->name('laptopkantor.index');
    Route::get('/createlaptop', [LaptopController::class, 'createlaptop'])->name('laptopkantor.create');
    Route::post('/storelaptop', [LaptopController::class, 'storelaptop'])->name('laptopkantor.store');
    Route::get('/showlaptop/{id}', [LaptopController::class, 'showlaptop'])->name('laptopkantor.show');
    Route::post('/updatelaptop/{id}', [LaptopController::class, 'updatelaptop'])->name('laptopkantor.update');
    Route::get('/destroylaptop/{id}', [LaptopController::class, 'destroylaptop'])->name('laptopkantor.destroy');


});