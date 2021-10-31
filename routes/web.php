<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PostulanteController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');

Route::middleware('superusuario')->resource('usuario', UserController::class);

Route::get('postulante/buscaPersona', [PersonaController::class, 'busca']);
Route::get('postulante/buscaCPT', [PostulanteController::class, 'buscaCPT'])->name('postulante.buscaCPT');
Route::middleware('usuario')->resource('postulante', PostulanteController::class);
Route::middleware('usuario')->get('postulante/{postulante}', [PostulanteController::class, 'generarPdf'])->name('postulante.pdf');
Route::middleware('usuario')->get('qrcode/{postulante}', [PostulanteController::class, 'qrcode'])->name('postulante.qrcode');
Route::middleware('usuario')->get('importar', [PostulanteController::class, 'importar'])->name('postulante.importar');