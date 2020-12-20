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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/chat', [App\Http\Controllers\ChatController::class, 'index'])->name('chat');

Route::get('/groups/create', function() {
    return view('groups.create');
})->name('gorups.create');

Route::get('/groups', function() {
    return view('groups.index');
})->name('groups.index');

Route::get('/room/edit', function(){
    return view('room.edit');
})->name('room.edit');

Route::get('/', [App\Http\Controllers\TimelineController::class, 'index'])->name('timeline');

Route::get('/timeline', [App\Http\Controllers\TimelineController::class, 'index'])->name('timeline');
Route::get('/post/create', [App\Http\Controllers\TimelineController::class, 'create'])->name('post.create');
Route::post('/post/create', [App\Http\Controllers\TimelineController::class, 'store'])->name('post.store');

Route::get('/view_profile', [App\Http\Controllers\ProfileController::class, 'view_index'])->name('view_profile');
Route::get('/edit_profile', [App\Http\Controllers\ProfileController::class, 'edit_index'])->name('edit_profile');

// Lobby
Route::get('/lobby', [App\Http\Controllers\LobbyController::class, 'index'])->name('lobby');

// Room
Route::get('/room/show/{id}', [App\Http\Controllers\RoomController::class, 'index'])->name('room');
Route::get('/room/create', [App\Http\Controllers\RoomController::class, 'create'])->name('create_room');
Route::post('/room/create', [App\Http\Controllers\RoomController::class, 'store'])->name('store_room');