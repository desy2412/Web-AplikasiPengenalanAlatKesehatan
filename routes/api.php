<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlatKesehatanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\Kategori1Controller;
use App\Http\Controllers\Kategori2Controller;
use App\Http\Controllers\Kategori3Controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('alatkesehatans', AlatKesehatanController::class);
Route::resource('kategoris', KategoriController::class);
Route::resource('kategori1s', Kategori1Controller::class);
Route::resource('kategori2s', Kategori2Controller::class);
Route::resource('kategori3s', Kategori3Controller::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
