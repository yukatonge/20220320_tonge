<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);
Route::post('/todo/create', [TodoController::class, 'create']);
Route::post('/edit', [TodoController::class, 'update'])->name('todoexe.update');
Route::get('/delete', [TodoController::class, 'delete'])->name('todoexe.delete');
Route::post('/delete', [TodoController::class, 'remove']);