<?php

use App\Http\Controllers\StudentController;
use App\Models\Students;
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

Route::get('/about', function () {
    return view('about');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/pengaduan', function () {
    return view('pengaduan');
});


Route::get('/cek-object', [StudentController::class, 'cekObject']);

Route::get('/insert', [StudentController::class, 'insert']);
Route::get('/mass-assignment', [StudentController::class, 'massAssignment']);
Route::get('/mass-assignment2', [StudentController::class, 'massAssignment2']);

Route::get('/update', [StudentController::class, 'update']);
Route::get('/update-where', [StudentController::class, 'updateWhere']);
Route::get('/mass-update', [StudentController::class, 'massUpdate']);

Route::get('/delete', [StudentController::class, 'delete']);
Route::get('/destroy', [StudentController::class, 'destroy']);
Route::get('/mass-delete', [StudentController::class, 'massDelete']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
