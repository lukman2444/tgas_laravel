<?php


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


Route::get('/add', function () {
    return view('tambah');
});

use App\Http\Controllers\KaryawanController;
Route::post('/', ['uses' => 'KaryawanController@show_by_admin']);
Route::get('/', [KaryawanController::class, 'show_by_admin']);
Route::post('/add_process', [KaryawanController::class, 'add_process']);
Route::get('/edit/{id}', [KaryawanController::class, 'edit']);
Route::get('/admin', [KaryawanController::class, 'show_by_admin']);
Route::post('/edit_process', [KaryawanController::class, 'edit_process']);
Route::get('/delete/{id}', [KaryawanController::class, 'delete']);
Route::get('/cari', [KaryawanController::class, 'cari']);