<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/anotacoes', function () {
    return view('anotacoes');
});

Route::get('/posts/create', [PostController::class, 'create'] );

Route::get('/posts/read', [PostController::class,'read'] );

Route::get('/posts/read_all', [PostController::class,'all'] );