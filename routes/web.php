<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\TransaksiController;
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

//route CRUD
Route::get('/',[MahasiswaController:: class, 'layout']);
Route::get('/tampilanmahasiswa',[MahasiswaController:: class, 'index']);
Route::get('/tambah',[MahasiswaController:: class, 'tambahmahasiswa']);
Route::post('/store',[MahasiswaController:: class, 'store']);
Route::get('/editmahasiswa/{id}',[MahasiswaController:: class, 'editmahasiswa']);
Route::post('/update',[MahasiswaController:: class, 'update']);
Route::get('/hapus/{id}',[MahasiswaController:: class, 'hapus']);

Route::get('/tampilanbuku',[BukuController:: class, 'indexbuku']);
Route::get('/tambahbuku',[BukuController:: class, 'tambahbuku']);
Route::post('/storebuku',[BukuController:: class, 'storebuku']);
Route::get('/editbuku/{id}',[BukuController:: class, 'editbuku']);
Route::post('/updatebuku',[BukuController:: class, 'update']);
Route::get('/hapusbuku/{id}',[BukuController:: class, 'hapusbuku']); 

Route::get('/tampilantransaksi',[TransaksiController:: class, 'indextransaksi']);
Route::get('/tambahtransaksi',[TransaksiController:: class, 'tambahtransaksi']);
Route::post('/storetransaksi',[TransaksiController:: class, 'storetransaksi']);
Route::get('/edittransaksi/{id}',[TransaksiController:: class, 'edittransaksi']);
Route::post('/updatetransaksi',[TransaksiController:: class, 'update']);
Route::get('/hapustransaksi/{id}',[TransaksiController:: class, 'hapustransaksi']); 
// Route::get('/tampilanTransaksi',[BukuController:: class, 'index']);
// Route::get('/tambahbuku',[BukuController:: class, 'tambahbuku']);
// Route::post('/storebuku',[BukuController:: class, 'storebuku']);
// Route::get('/editbuku/{id}',[BukuController:: class, 'editbuku']);
// Route::post('/updatebuku',[BukuController:: class, 'update']);
// Route::get('/hapusbuku/{id}',[BukuController:: class, 'hapusbuku']); 