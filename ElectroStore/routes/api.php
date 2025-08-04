<?php

use App\Http\Controllers\UsuarioController;

Route::post('/register', [UsuarioController::class, 'register']);
Route::post('/login', [UsuarioController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [UsuarioController::class, 'logout']);
