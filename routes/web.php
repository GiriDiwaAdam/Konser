<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
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

Auth::routes();
//Routingan Buat Ke halaman tertentu
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('checkRole:admin');
Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');
Route::get('/tickets')->middleware(['checkRole:admin']);
Route::get('/create',function () { return view('create'); })->middleware(['checkRole:pengunjung']);
Route::get('cekin', function () { return view('cekin'); })->middleware(['checkRole:admin']);
Route::get('laporan', function () { return view('laporan'); })->middleware(['checkRole:admin']);
Route::resource('tickets', TicketController::class);
