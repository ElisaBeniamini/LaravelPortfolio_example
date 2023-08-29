<?php

use App\Http\Controllers\DinamicController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/chisono', [PublicController::class, 'chisono'])->name('chisono');

Route::get('/contatti', [PublicController::class, 'contatti'])->name('contatti');
Route::post('/invia-email', [PublicController::class, 'send'])->name('invia');




Route::get('/serviziofferti', [DinamicController::class, 'serviziofferti'])->name('serviziofferti');
Route::get('/dettaglio{nome}', [DinamicController::class, 'dettaglio'])->name('dettaglio');
