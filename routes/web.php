<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ScholarshipController;
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

Route::get('/', [ScholarshipController::class, 'scholarshipPage']);
Route::get('/daftar', [ApplicationController::class, 'applicationPage']);
Route::post('/daftar', [ApplicationController::class, 'createApplication']);
Route::get('/hasil', [ResultController::class, 'resultPage']);
Route::get('files/{filename}', 'ResultController@show')->name('file.show');

