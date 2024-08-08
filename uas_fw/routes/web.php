<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\DataObatController;
 use App\Http\Controllers\ObatKeluarController;
 use App\Http\Controllers\StokObatController;
 use App\Http\Controllers\PetugasController;
 use App\Http\Controllers\DasboardController;

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
    return view('/Auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//stokobat
Route::get('/stokobat/', [StokObatController::class, 'index']);
Route::get('/stokobat/form/', [StokObatController::class, 'create']);
Route::post('/stokobat/store/', [StokObatController::class, 'store']);


//obatmasuk
Route::get('/dataobat/', [DataObatController::class, 'index']);
Route::get('/dataobat/form/', [DataObatController::class, 'create']);
Route::post('/dataobat/store/', [DataObatController::class, 'store']);

//obatkeluar
Route::get('/obatkeluar/', [ObatKeluarController::class, 'index']);
Route::get('/obatkeluar/form/', [ObatKeluarController::class, 'create']);
Route::post('/obatkeluar/store/', [ObatKeluarController::class, 'store']);

//petugas
Route::get('/petugas/', [PetugasController::class, 'index']);
Route::get('/petugas/form/', [PetugasController::class, 'create']);
Route::post('/petugas/store/', [PetugasController::class, 'store']);



