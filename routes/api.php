<?php

use App\Http\Controllers\LivroController;
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


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/livros', [LivroController::class, 'listarLivros']);
Route::get('/livros/autor/{autorId}', [LivroController::class, 'listarLivrosPorAutor']);
Route::get('/livros/titulo/{titulo}', [LivroController::class, 'listarLivrosPorTitulo']);
Route::get('/livros/autor-titulo/{titulo}/{autorId}', [LivroController::class, 'listarLivrosPorTitulo']);