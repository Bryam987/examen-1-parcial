<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensajeController; 


// Ruta para mostrar un mensaje personalizado que acepte un argumento.
Route::get('/mensaje-personalizado/{mensaje}', [MensajeController::class, 'mensajePersonalizado'])->name('mensaje.personalizado');

// Ruta para mostrar un mensaje específico basado en la hora del día.
Route::get('/mensaje-hora', [MensajeController::class, 'mensajeHora'])->name('mensaje.hora');

// Ruta para mostrar un saludo repetido varias veces.

Route::get('/saludo-repetido/{veces?}', [MensajeController::class, 'saludoRepetido'])->name('saludo.repetido');