<?php

use App\Http\Controllers\AboutUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function(){return view('pages.home');})->name('index');

Route::get('/produtos', function () {return 'Produtos';});

Route::get('/produtos/{id}', function (Int $id) {return 'Produtos id -> '.$id;})->where('id', '[0-9]+');

Route::get('/cadastro', function () {return 'Cadastro';});

Route::get('/login', function () {return 'Login';});

Route::get('/sobre', function(){return 'Sobre';})->name('about');

Route::prefix('/admin')->group(function(){
    Route::get('/login', function () {return 'Admin Login';});

    Route::get('/dashboard', function () {return 'Admin Dashboard';});

    Route::get('/clientes', function () {return 'Admin Clientes';});

    Route::get('/clientes/{id?}', function (Int $id) {return 'Admin Clentes id -> '.$id;})->where('id', '[0-9]+');

    Route::get('/fornecedores', function () {return 'Admin Fornecedores';});

    Route::get('/produtos', function () {return 'Admin Produtos';});

    Route::get('/produto/{slug}', function (String $slug) {return 'Admin Produtos slug -> '.$slug;})->where('slug', '[A-Za-z]+');
});

Route::fallback(function(){
    return 'Rota não encontrada. <a href="'. route('index') .'">Voltar</a>';
});