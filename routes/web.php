<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/relacionamentos', function () {
    return view('relacionamentos');
});

Route::get('/anotacoes', function () {
    return view('anotacoes');
});

Route::get('/posts/create', [PostController::class, 'create'] );

Route::get('/posts/read', [PostController::class,'read'] );

Route::get('/posts/read_all', [PostController::class,'all'] );

Route::get('/posts/update', [PostController::class,'update'] );

Route::get('/posts/delete', [PostController::class,'delete'] );