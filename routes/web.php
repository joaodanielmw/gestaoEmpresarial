<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/produtos', [ProductController::class,'index']);

Route::get('/produtos/{id}', function(int $id) {return view('pages.products.show');})->where('id', '[0-9]+');

Route::get('/cadastro', [UserController::class,'create']);

Route::get('/login', [UserController::class,'index']);

Route::get('/sobre', function(){return 'Sobre';})->name('about');


Route::prefix('/admin')->group(function(){
    Route::get('/', function () {return redirect('/admin/dashboard');});

    Route::get('/login', [AdminController::class,'index']);

    Route::get('/dashboard', function () {return view('pages.admin.dashboard');});

    Route::get('/clientes', function () {return view('pages.admin.costumers.index');});

    Route::get('/clientes/{id?}', function (Int $id) {return view('pages.admin.costumers.show');})->where('id', '[0-9]+');

    Route::get('/produtos', function () {return view('pages.admin.products.index');});

    Route::get('/produtos/{id?}', function (int $id) {return view('pages.admin.products.show');})->where('id', '[0-9]+');
});

Route::fallback(function(){
    return 'Rota não encontrada. <a href="'. route('index') .'">Voltar</a>';
});