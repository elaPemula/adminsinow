<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('mewarna', 'Api\MewarnaController');
Route::apiResource('menyanyi', 'Api\MenyanyiController');
Route::apiResource('huruf', 'Api\HurufController');
Route::apiResource('angka', 'Api\AngkaController');
Route::apiResource('quiz', 'Api\QuizController');
