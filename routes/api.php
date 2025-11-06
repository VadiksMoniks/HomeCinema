<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'film'], function() {
    Route::get('/', [FilmController::class, 'getFilmList']);
    Route::get('/view/{id}', [FilmController::class, 'getFilm']);

    Route::post('/create', [FilmController::class, 'createFilm'])->middleware('auth:sanctum');
    Route::post('/update/{id}', [FilmController::class, 'updateFilm'])->middleware('auth:sanctum');
    Route::delete('/delete/{id}', [FilmController::class, 'deleteFilm'])->middleware('auth:sanctum');
});

Route::group(['prefix' => 'admin'], function() {
    Route::post('/login', [AdminController::class, 'login']);
    Route::post('/logout', [AdminController::class, 'logout'])->middleware('auth:sanctum');
});

Route::group(['prefix' => 'person'], function() {
    Route::get('/', [PersonController::class, 'list']);
    Route::get('/{id}', [PersonController::class, 'viewProfile']);

    Route::post('/create', [PersonController::class, 'addProfile']);
    Route::post('/update/{id}', [PersonController::class, 'updateProfile']);
    Route::delete('/{id}', [PersonController::class, 'deleteProfile']);
});

Route::group(['prefix' => 'tag'], function() {
    Route::get('/', [TagController::class, 'list']);

    Route::post('/', [TagController::class, 'create'])->middleware('auth:sanctum');
    Route::delete('/delete/{id}', [TagController::class, 'delete'])->middleware('auth:sanctum');
});
