<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/questions', [QuestionController::class, 'index']);
Route::get('/answers/{id}', [QuestionController::class, 'show']);
Route::get('/questions/{id}', [QuestionController::class, 'show']);
