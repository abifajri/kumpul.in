<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/view_profile', [App\Http\Controllers\ProfileController::class, 'view_index'])->name('view_profile');
Route::get('/edit_profile', [App\Http\Controllers\ProfileController::class, 'edit_index'])->name('edit_profile');
Route::get('/room', [App\Http\Controllers\RoomController::class, 'index'])->name('room');
Route::get('/create_room', [App\Http\Controllers\RoomController::class, 'create'])->name('create_room');
Route::get('/lobby', [App\Http\Controllers\LobbyController::class, 'index'])->name('lobby');
