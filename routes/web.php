<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
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

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/world', function () {
    return ('World');
});

Route::get('/selamat', function () {
    return ('Selamat Datang');
});

Route::get('/nama', function () {
    return ('2241720025, Abima Fadricho Syuhadak');
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

Route::get('/articels/{id}', function ($Id) {
    return 'Halaman Artikel dengan ID ' . $Id;
});

Route::resource('Photos', PhotoController::class);

Route::get('/greeting', [WelcomeController::class, 'greeting']);
