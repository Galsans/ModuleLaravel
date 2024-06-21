<?php

use App\Http\Controllers\CrudTanpaGambarController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [CrudTanpaGambarController::class, 'index'])->name('CrudTanpaGambar.index');
Route::get('crudTanpaGambar', [CrudTanpaGambarController::class, 'create'])->name('CrudTanpaGambar.create');
Route::post('crudTanpaGambar', [CrudTanpaGambarController::class, 'store'])->name('CrudTanpaGambar.store');
Route::get('crudTanpaGambar/{id}', [CrudTanpaGambarController::class, 'edit'])->name('CrudTanpaGambar.edit');
Route::put('crudTanpaGambar/{id}', [CrudTanpaGambarController::class, 'update'])->name('CrudTanpaGambar.update');
Route::delete('crudTanpaGambar/{id}', [CrudTanpaGambarController::class, 'destroy'])->name('CrudTanpaGambar.destroy');
