<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('pages.home'); })->name('home');

Route::prefix('produtos')->name('produtos.')->group(function(){
    Route::get('todos', [ProdutoController::class, 'index'])->name('index');
    Route::get('cadastrar', [ProdutoController::class, 'create'])->name('create');
    Route::post('cadastrar', [ProdutoController::class, 'store'])->name('store');
    Route::delete('{id}', [ProdutoController::class, 'destroy'])->name('destroy');
});

Route::prefix('clientes')->name('clientes.')->group(function(){
    Route::get('todos', [ClienteController::class, 'index'])->name('index');
    Route::get('cadastrar', [ClienteController::class, 'create'])->name('create');
    Route::post('cadastrar', [ClienteController::class, 'store'])->name('store');
});