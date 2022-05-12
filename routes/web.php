<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasController;

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
    Route::get('/index', [KasController::class, 'index'])->name('kaskantor.index');
    Route::get('/create', [KasController::class, 'create'])->name('kaskantor.create');
    Route::post('/store', [KasController::class, 'store'])->name('kaskantor.store');
    Route::get('/{id}/show', [KasController::class, 'show'])->name('kaskantor.show');
    Route::post('/{id}/update', [KasController::class, 'update'])->name('kaskantor.update');
    Route::get('/{id}/destroy', [KasController::class, 'destroy'])->name('kaskantor.destroy');

});