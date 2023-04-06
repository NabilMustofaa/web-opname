<?php

use App\Http\Controllers\DesktopController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\OpnameController;
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



route::group(['prefix' => 'admin','middleware'=> 'auth'], function () {
    Route::get('/', [DesktopController::class, 'index']);
    Route::get('/opname', [OpnameController::class, 'create']);
    Route::get('/opname/users', [OpnameController::class, 'users']);
});

route::group(['prefix' => 'admin','middleware'=> 'guest'], function () {
    Route::get('/login', [DesktopController::class, 'login']);
    Route::post('/login', [DesktopController::class, 'authenticate']);
    Route::get('/logout', [DesktopController::class, 'logout']);
});

Route::group([], function () {
    Route::get('/', [MobileController::class, 'home'])->name('login');
    Route::get('/login', [MobileController::class, 'login']);
    Route::post('/login', [MobileController::class, 'authenticate']);
    Route::post('/logout', [MobileController::class, 'logout']);
});
Route::get('/{keyword}/',[MobileController::class, 'index'])->name('mobile.index')->middleware('auth:mobile');
