<?php

use App\Http\Controllers\BakuController;
use App\Http\Controllers\JadiController;
use App\Http\Controllers\JualController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::post('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('main', [MainController::class, 'index'])->name('main')->middleware('auth');

Route::get('storebaku', [MainController::class, 'storebaku'])->name('storebaku')->middleware('auth');
Route::get('storejadi', [MainController::class, 'storejadi'])->name('storejadi')->middleware('auth');
Route::get('purchase', [MainController::class, 'purchase'])->name('purchase')->middleware('auth');

Route::get('hasil', [MainController::class, 'hasil'])->name('hasil')->middleware('auth');

Route::post('store', [MainController::class, 'store'])->name('store')->middleware('auth');
Route::post('svpurchase', [MainController::class, 'svpurchase'])->name('svpurchase')->middleware('auth');
Route::post('svhasil', [MainController::class, 'svhasil'])->name('svhasil')->middleware('auth');

Route::get('baku', [BakuController::class, 'index'])->name('baku')->middleware('auth');
Route::post('baku/{id}', [BakuController::class, 'edit'])->name('baku.accept')->middleware('auth');

Route::get('jadi', [JadiController::class, 'index'])->name('jadi')->middleware('auth');
Route::post('jadi/{id}', [JadiController::class, 'edit'])->name('jadi.edit')->middleware('auth');

Route::get('jual', [JualController::class, 'index'])->name('jual')->middleware('auth');
Route::get('sell', [JualController::class, 'sell'])->name('sell')->middleware('auth');
Route::post('svsell', [JualController::class, 'svsell'])->name('svsell')->middleware('auth');

Route::get('laporanstock', [LaporanController::class, 'index'])->name('laporan')->middleware('auth');
Route::get('laporancredit', [LaporanController::class, 'index2'])->name('laporan2')->middleware('auth');
