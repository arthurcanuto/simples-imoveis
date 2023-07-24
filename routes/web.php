<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ImovelController;

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

Route::get('/', function () {
    return view('welcome');
});

// Rotas para clientes
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{IdClientes}', [ClienteController::class, 'show'])->name('clientes.show');
Route::get('/clientes/{IdClientes}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{IdClientes}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{IdClientes}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

// Rotas para imóveis
Route::get('/imoveis', [ImovelController::class, 'index'])->name('moveis.index');
Route::get('/imoveis/create', [ImovelController::class, 'create'])->name('imoveis.create');
Route::post('/imoveis', [ImovelController::class, 'store'])->name('imoveis.store');
Route::get('/imoveis/{id}', [ImovelController::class, 'show'])->name('imoveis.show');
Route::get('/imoveis/{id}/edit', [ImovelController::class, 'edit'])->name('imoveis.edit');
Route::put('/imoveis/{id}', [ImovelController::class, 'update'])->name('imoveis.update');
Route::delete('/imoveis/{id}', [ImovelController::class, 'destroy'])->name('imoveis.destroy');


