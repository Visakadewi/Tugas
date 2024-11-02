<?php

use App\Http\Controllers\tugasController;
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

Route::get('/tugas1', function () {
    return view('tugas.tugas1');
});

Route::get('/tugas2', function () {
    return view('tugas.tugas2');
});

Route::get('/Base', function () {
    return view('Layouts.Base');
});

Route::get('/dashboard', function () {
    return view('Admin.Dashboard');
});

Route::get('/', [tugasController::class, 'index']);

Route::get('tugas.edit', [tugasController::class, 'edit'])->name('edit');
Route::get('tugas.create', [tugasController::class, 'create'])->name('create');

Route::get('/tugas', [tugasController::class, 'index'])->name('getalldataPegawai');
Route::post('/tugas', [tugasController::class, 'createData'])->name('createDataPegawai');

Route::get('/tugas/get/{id}', [tugasController::class, 'getDataById'])->name('getDataByIdPegawai');
Route::post('/tugas/update/{id}', [tugasController::class, 'updateData'])->name('updateDataPegawai');
Route::delete('/tugas/delete/{id}', [tugasController::class, 'deleteData'])->name('deleteDataPegawai');
