<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/', [MahasiswaController::class,'index'])->name('mahasiswa');
Route::get('/tambah', [MahasiswaController::class,'add']);
Route::post('/tambahData', [MahasiswaController::class,'tambah']);
Route::get('/edit/{id}', [MahasiswaController::class,'edit']);
Route::post('/editData/{id}', [MahasiswaController::class,'editData']);
Route::get('/hapus/{id}', [MahasiswaController::class,'hapus']);
Route::get('/about', function () {
    return view('about',[
        "title"=>"About"
    ]);
});

