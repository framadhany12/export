<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LoginController;

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
    return redirect(route('login'));
});
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::get('/register', [LoginController::class, 'regis'])->name('register');
Route::post('/store', [LoginController::class, 'store'])->name('authregister');

Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');





Route::resource('/student', StudentController::class)->middleware('auth');
Route::resource('/mahasiswa', MahasiswaController::class)->middleware('auth');
Route::get('/studentexport', [StudentController::class, 'exportstudent']);
Route::get('/mahasiswaexport', [MahasiswaController::class, 'exportmahasiswa']);
