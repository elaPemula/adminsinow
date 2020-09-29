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
    return view('home');
});

Route::resource('quiz', 'QuizController');
Route::resource('menyanyi', 'MenyanyiController');
Route::resource('huruf', 'HurufController');
Route::resource('angka', 'AngkaController');
Route::resource('mewarna', 'MewarnaController');
Route::resource('membaca', 'MembacaController');
