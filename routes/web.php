<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalloController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo', function () {
    return 'Halaman Todo App';
});

Route::get('/halo1', function () {
    return view('halo1');
});

Route::get ('/halo2', [HalloController::class, 'index']);

Route::get('/profil', function () {
    return view('profil', ['nama' => 'Budi Santoso']);
});

Route::get('/todo-Check', function () {
    return view('todo', ['status' => 'selesai']); 
});

Route::get('/daftar-tugas', function () {
    $daftarTodo = ['Belajar Laravel', 'Membuat CRUD', 'Deploy Aplikasi'];
    return view('daftar_todo', ['todos' => $daftarTodo]);
});

Route::get('/my-todo', function () {
    return view('tugas'); // Cukup panggil file anaknya saja
});

