<?php

use App\Http\Controllers\admin\Auth\LoginAdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\KandidatController;
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

Route::get('/', [LoginController::class, 'index'])->name("login");

Route::get('/kandidat', [KandidatController::class, 'index'])->name("kandidat");

Route::get('/dashboard', function(){
    return view('admin.pages.index');
})->name("dashboard");

Route::get('/login', [LoginAdminController::class, 'index'])->name("loginAdmin");
Route::post('/login', [LoginAdminController::class, 'login'])->name("loginAdmin.login");