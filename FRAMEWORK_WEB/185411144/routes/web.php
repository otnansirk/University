<?php

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

Route::get('segi-empat/inputSegiEmpat', 'App\Http\Controllers\SegiEmpatController@inputSegiEmpat')->name('segi-empat.inputSegiEmpat');
Route::get('segi-empat/inputSegiEmpat',
 'App\Http\Controllers\SegiEmpatController@inputSegiEmpat')
 ->name('segi-empat.inputSegiEmpat');

Route::post('segi-empat/hasil','App\Http\Controllers\SegiEmpatController@hasil')
 ->name('segi-empat.hasil');

Route::resource('propinsi', 'App\Http\Controllers\PropinsiController');
Route::resource('kota', 'App\Http\Controllers\KotaController');
Route::resource('anggota', 'App\Http\Controllers\AnggotaController');