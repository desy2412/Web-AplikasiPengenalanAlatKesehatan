<?php

use App\Http\Controllers\AlatKesehatanController;
use App\Http\Controllers\Kategori1Controller;
use App\Http\Controllers\Kategori2Controller;
use App\Http\Controllers\Kategori3Controller;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::get('/kategori/{id}/show', [KategoriController::class, 'show'])->name('kategori.show');
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::patch('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
Route::delete('/kategori/destroy/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
Route::delete('/kategori/{id/delete', [KategoriController::class, 'hapus'])->name('kategori.delete');

Route::get('/kategori1', [Kategori1Controller::class, 'index'])->name('kategori1.index');
Route::get('/kategori1/create', [Kategori1Controller::class, 'create'])->name('kategori1.create');
Route::get('/kategori1/{id}/show', [Kategori1Controller::class, 'show'])->name('kategori1.show');
Route::get('/kategori1/{id}/edit', [Kategori1Controller::class, 'edit'])->name('kategori1.edit');
Route::patch('/kategori1/{id}', [Kategori1Controller::class, 'update'])->name('kategori1.update');
Route::post('/kategori1/store', [Kategori1Controller::class, 'store'])->name('kategori1.store');
Route::delete('/kategori1/destroy/{id}', [Kategori1Controller::class, 'destroy'])->name('kategori1.destroy');
Route::delete('/kategori1/{id/delete', [Kategori1Controller::class, 'hapus'])->name('kategori1.delete');

Route::get('/kategori2', [Kategori2Controller::class, 'index'])->name('kategori2.index');
Route::get('/kategori2/create', [Kategori2Controller::class, 'create'])->name('kategori2.create');
Route::get('/kategori2/{id}/show', [Kategori2Controller::class, 'show'])->name('kategori2.show');
Route::get('/kategori2/{id}/edit', [Kategori2Controller::class, 'edit'])->name('kategori2.edit');
Route::patch('/kategori2/{id}', [Kategori2Controller::class, 'update'])->name('kategori2.update');
Route::post('/kategori2/store', [Kategori2Controller::class, 'store'])->name('kategori2.store');
Route::delete('/kategori2/destroy/{id}', [Kategori2Controller::class, 'destroy'])->name('kategori2.destroy');
Route::delete('/kategori2/{id/delete', [Kategori2Controller::class, 'hapus'])->name('kategori2.delete');
    
Route::get('/kategori3', [Kategori3Controller::class, 'index'])->name('kategori3.index');
Route::get('/kategori3/create', [Kategori3Controller::class, 'create'])->name('kategori3.create');
Route::get('/kategori3/{id}/show', [Kategori3Controller::class, 'show'])->name('kategori3.show');
Route::get('/kategori3/{id}/edit', [Kategori3Controller::class, 'edit'])->name('kategori3.edit');
Route::patch('/kategori3/{id}', [Kategori3Controller::class, 'update'])->name('kategori3.update');
Route::post('/kategori3/store', [Kategori3Controller::class, 'store'])->name('kategori3.store');
Route::delete('/kategori3/destroy/{id}', [Kategori3Controller::class, 'destroy'])->name('kategori3.destroy');
Route::delete('/kategori3/{id/delete', [Kategori3Controller::class, 'hapus'])->name('kategori3.delete');
        
Route::get('/alatkesehatan', [AlatKesehatanController::class, 'index'])->name('alatkesehatan.index');
Route::get('/alatkesehatan/create', [AlatKesehatanController::class, 'create'])->name('alatkesehatan.create');
Route::get('/alatkesehatan/{id}/show', [AlatKesehatanController::class, 'show'])->name('alatkesehatan.show');
Route::get('/alatkesehatan/{id}/edit', [AlatKesehatanController::class, 'edit'])->name('alatkesehatan.edit');
Route::patch('/alatkesehatan/{id}', [AlatKesehatanController::class, 'update'])->name('alatkesehatan.update');
Route::post('/alatkesehatan/store', [AlatKesehatanController::class, 'store'])->name('alatkesehatan.store');
Route::delete('/alatkesehatan/destroy/{id}', [AlatKesehatanController::class, 'destroy'])->name('alatkesehatan.destroy');
Route::delete('/alatkesehatan/{id/delete', [AlatKesehatanController::class, 'hapus'])->name('alatkesehatan.delete');