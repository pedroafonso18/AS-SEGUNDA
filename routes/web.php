<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\PedidoController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('pessoas', PessoaController::class);
Route::resource('carros', CarroController::class);
Route::resource('animais', AnimalController::class);
Route::resource('livros', LivroController::class);
Route::resource('empresas', EmpresaController::class);
Route::resource('pedidos', PedidoController::class);
