<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\DataObatController;

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
//     return view('welcome');
// });

// Route::get('/master', function () {
//     return view('master');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//dataobat
Route::get('/dataobat/', [DataObatController::class, 'index']);
Route::get('/dataobat/form/', [DataObatController::class, 'create']);
Route::get('/dataobat/store/', [DataObatController::class, 'store']);
