<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/todos', [TodoController::class, 'index']);
Route::post('/todos', [TodoController::class, 'store']);
Route::patch('/todos/{id}/complete', [TodoController::class, 'complete']);
Route::delete('/todos/{id}', [TodoController::class, 'destroy']);

Route::get('/', fn() => redirect('/todos'));