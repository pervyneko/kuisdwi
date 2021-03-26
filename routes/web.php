<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KuisController;
use App\Http\Controllers\Soal2;
use App\Http\Controllers\Soal3;
use App\Http\Controllers\Soal4;
use App\Http\Controllers\Soal5;
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
    return view('welcome');
});

Route::get('/soal1', [KuisController::class, 'index']);
Route::post('/soal1/proses', [KuisController::class, 'proses']);

Route::get('/soal2', [Soal2::class, 'index']);
Route::post('/soal2/proses', [Soal2::class, 'proses']);

Route::get('/soal3', [Soal3::class, 'index']);
Route::post('/soal3/proses', [Soal3::class, 'proses']);

Route::get('/soal4', [Soal4::class, 'index']);
Route::post('/soal4/proses', [Soal4::class, 'proses'])->name('soal4.proses');
Route::get('/soal4/{angka}', [Soal4::class, 'result'])->name('soal4.result');

Route::get('/soal5', [Soal5::class, 'index']);
Route::post('/soal5/proses', [Soal5::class, 'proses']);
