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
    Route::get('/indexkas', [KasController::class, 'indexkas'])->name('kaskantor.index');
    Route::get('/createkas', [KasController::class, 'createkas'])->name('kaskantor.create');
    Route::post('/storekas', [KasController::class, 'storekas'])->name('kaskantor.store');
    Route::get('/showkas/{id}', [KasController::class, 'showkas'])->name('kaskantor.show');
    Route::post('/updatekas/{id}', [KasController::class, 'updatekas'])->name('kaskantor.update');
    Route::get('/destroykas/{id}', [KasController::class, 'destroykas'])->name('kaskantor.destroy');

});