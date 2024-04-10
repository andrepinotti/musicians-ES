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
//We'll call our Controller
use App\Http\Controllers\MusicianController;

Route::get('/', [MusicianController::class, 'index']);
Route::get('/musician', [MusicianController::class, 'musician']);
Route::get('/dashboard', [MusicianController::class, 'dashboard']);
Route::post('/musician', [MusicianController::class, 'store'])->name('musician.store');
Route::delete('/dashboard/{id}', [MusicianController::class, 'destroy']); //pattern name of delete in laravel is destroy
Route::get('/edit/{id}', [MusicianController::class, 'edit']);
Route::put('/edit/{id}', [MusicianController::class, 'update']);