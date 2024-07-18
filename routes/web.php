<?php

use App\Http\Controllers\BakuController;
use App\Http\Controllers\JadiController;
use App\Http\Controllers\JualController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;
use PgSql\Lob;

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

Route::post('bakua/{id}', [BakuController::class, 'edit'])->name('baku.accept')->middleware('auth');
Route::post('baku/{id}', [BakuController::class, 'delete'])->name('baku.delete')->middleware('auth');

Route::get('jadi', [JadiController::class, 'index'])->name('jadi')->middleware('auth');
Route::post('jadi/{id}', [JadiController::class, 'edit'])->name('jadi.edit')->middleware('auth');
Route::post('jadid/{id}', [JadiController::class, 'delete'])->name('jadi.delete')->middleware('auth');

Route::get('jual', [JualController::class, 'index'])->name('jual')->middleware('auth');
Route::get('sell', [JualController::class, 'sell'])->name('sell')->middleware('auth');
Route::post('svsell', [JualController::class, 'svsell'])->name('svsell')->middleware('auth');

Route::get('laporanstock', [LaporanController::class, 'index'])->name('laporan')->middleware('auth');
Route::get('laporancredit', [LaporanController::class, 'index2'])->name('laporan2')->middleware('auth');

Route::get('users', [UserController::class, 'index'])->name('users')->middleware('auth');
Route::get('edituser', [UserController::class, 'edituser'])->name('edituser')->middleware('auth');
Route::get('createuser', [UserController::class, 'createuser'])->name('createuser')->middleware('auth');
Route::post('users', [UserController::class, 'store'])->name('users.store')->middleware('auth');
Route::post('users/{id}', [UserController::class, 'update'])->name('users.update')->middleware('auth');

Route::get('export-expense', [LaporanController::class, 'exportToPDFExpense'])->name('expense.pdf')->middleware('auth');
Route::get('export-stock', [LaporanController::class, 'exportToPDFStock'])->name('stock.pdf')->middleware('auth');

Route::delete('delete/{id}', [UserController::class, 'destroy'])->name('delete.data')->middleware('auth');;

Route::delete('delete-expense', [LaporanController::class, 'deleteDataExpense'])->name('delete.dataexpense')->middleware('auth');

Route::delete('delete', [LaporanController::class, 'deleteByYearMonth'])->name('delete.byYearMonth')->middleware('auth');;
