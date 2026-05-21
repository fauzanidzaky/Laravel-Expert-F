<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;


Route::get('/', function () {
    return view('SampaiJadi'); //
});

Route::get('/', [MenuController::class, 'home']);
Route::get('/tentang', [MenuController::class, 'tentang']);
Route::get('/jasa', [MenuController::class, 'jasa']);
Route::get('/keahlian', [MenuController::class, 'keahlian']);
Route::get('/kontak', [MenuController::class, 'kontak']);