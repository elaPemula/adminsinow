<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('mewarna', 'Api\MewarnaController')->names([
    'index' => 'mewarna-api.index',
    'show' => 'mewarna-api.show',
])->only(['index', 'show']);
Route::apiResource('membaca', 'Api\MembacaController')->names([
    'index' => 'membaca-api.index',
    'show' => 'membaca-api.show',
])->only(['index', 'show']);
Route::apiResource('warna', 'Api\WarnaController')->names([
    'index' => 'warna-api.index',
    'show' => 'warna-api.show',
])->only(['index', 'show']);
Route::apiResource('menyanyi', 'Api\MenyanyiController')->names([
    'index' => 'menyanyi-api.index',
    'show' => 'menyanyi-api.show',
])->only(['index', 'show']);
Route::apiResource('huruf', 'Api\HurufController')->names([
    'index' => 'huruf-api.index',
    'show' => 'huruf-api.show',
])->only(['index', 'show']);
Route::apiResource('angka', 'Api\AngkaController')->names([
    'index' => 'angka-api.index',
    'show' => 'angka-api.show',
])->only(['index', 'show']);
Route::apiResource('quiz', 'Api\QuizController')->names([
    'index' => 'quiz-api.index',
    'show' => 'quiz-api.show',
])->only(['index', 'show']);
Route::apiResource('kritiksaran', 'Api\KritiksaranController')->names([
    'index' => 'kritiksaran-api.index',
    'store' => 'kritiksaran-api.store',
])->only(['index', 'store']);
