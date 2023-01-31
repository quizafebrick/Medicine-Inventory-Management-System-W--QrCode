<?php

use App\Http\Controllers\LoginAndRegister;
use App\Http\Controllers\PublicDirectory;
use App\Http\Controllers\UsersViewing;
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

// * PUBLIC *//
Route::controller(PublicDirectory::class)->group(function () {
    Route::get('/', 'index')->name('login');
    Route::get('/register', 'registration')->name('register');
});

Route::controller(LoginAndRegister::class)->group(function () {
    Route::post('/save', 'createAccount')->name('save-register');
    Route::post('/logging_in', 'check')->name('check-login');
});

// * ======================================================= *//

// * USERS *//
Route::controller(UsersViewing::class)->group(function () {
    Route::get('/u', 'index')->name('users-index');
});
