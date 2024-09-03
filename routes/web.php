<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavegacionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactControllerBolsa;

Route::get('/', [NavegacionController::class, 'home']);
Route::get('/acercaNosotros', [NavegacionController::class, 'acercaNosotros']);
Route::get('/servicios', [NavegacionController::class, 'servicios']);
Route::post('/contact', [ContactController::class, 'sendCoti'])->name('send.coti');
Route::post('/contactBolsa', [ContactController::class, 'sendResi'])->name('send.resi');
Route::get('/client_pro', function () { return view('client_pro'); })->name('client_pro.form');
Route::get('/client_pro', [NavegacionController::class, 'client_pro']);
Route::get('/vista_bolsa', [NavegacionController::class, 'vista_bolsa']);
Route::get('/vista_bolsa', function () { return view('vista_bolsa'); })->name('vista_bolsa.form');
Route::get('/vistaAuto', [NavegacionController::class, 'vistaAuto']);
Route::get('/vistaIE', [NavegacionController::class, 'vistaIE']);
Route::get('/vistaPaileria', [NavegacionController::class, 'vistaPaileria']);
Route::get('/vistaDM', [NavegacionController::class, 'vistaDM']);
Route::get('/vistaIP', [NavegacionController::class, 'vistaIP']);
Route::get('/vistaRobotica', [NavegacionController::class, 'vistaRobotica']);

