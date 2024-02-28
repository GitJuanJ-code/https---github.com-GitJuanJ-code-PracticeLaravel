<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/', HomeController::class);

Route::controller(CursoController::class)->group(function () {
    Route::get('publicaciones', 'index')->name('publicaciones.index');

    Route::get('publicaciones/create', 'create')->name('publicaciones.create');

    Route::post('publicaciones', 'store')->name('publicaciones.store');

    Route::get('publicaciones/{id}', 'show')->name('publicaciones.show');
});

// Route::get('publicaciones/{posts}/{categoria?}', function ($posts, $categoria = null) {
    
//     if($categoria){
//         return "Publicación de $posts de la categoria $categoria";
//     } else {
//         return "Bienvenidos a $posts";
//     }

// });