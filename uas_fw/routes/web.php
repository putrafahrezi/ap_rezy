<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\DataObatController;
 use App\Http\Controllers\ObatKeluarController;
 use App\Http\Controllers\StokObatController;
 use App\Http\Controllers\PetugasController;
 use App\Http\Controllers\SuplierController;
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
Route::get('/dataobat/edit/{id}', [DataObatController::class, 'edit']);
Route::put('/dataobat/{id}', [DataObatController::class, 'update']);
Route::delete('/dataobat/{id}', [DataObatController::class, 'destroy']);

//obatkeluar
Route::get('/obatkeluar/', [ObatKeluarController::class, 'index']);
Route::get('/obatkeluar/form/', [ObatKeluarController::class, 'create']);
Route::post('/obatkeluar/store/', [ObatKeluarController::class, 'store']);
Route::get('/obatkeluar/edit/{id}', [ObatKeluarController::class, 'edit']);
Route::put('/obatkeluar/{id}', [ObatKeluarController::class, 'update']);
Route::delete('/obatkeluar/{id}', [ObatKeluarController::class, 'destroy']);

//petugas
Route::get('/petugas/', [PetugasController::class, 'index']);
Route::get('/petugas/form/', [PetugasController::class, 'create']);
Route::post('/petugas/store/', [PetugasController::class, 'store']);
Route::get('/petugas/edit/{id}', [PetugasController::class, 'edit']);
Route::put('/petugas/{id}', [PetugasController::class, 'update']);
Route::delete('/petugas/{id}', [PetugasController::class, 'destroy']);


//suplier
Route::get('/suplier/', [SuplierController::class, 'index']);
Route::get('/suplier/form/', [SuplierController::class, 'create']);
Route::post('/suplier/store/', [SuplierController::class, 'store']);
Route::get('/suplier/edit/{id}', [SuplierController::class, 'edit']);
Route::put('/suplier/{id}', [SuplierController::class, 'update']);
Route::delete('/suplier/{id}', [SuplierController::class, 'destroy']);



