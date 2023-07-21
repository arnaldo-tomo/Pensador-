<?php

use App\Http\Controllers\Pensaodor;
use App\Http\Controllers\ProfileController;
use App\Models\categoria;
use Illuminate\Support\Facades\Route;


Route::get('/',[Pensaodor::class,'welcome']);
Route::get('frase{id}', [Pensaodor::class, 'verfrase']);
Route::get('menushare', [Pensaodor::class, 'menushare'])->name('menushare');
Route::get('menu', [Pensaodor::class, 'menu'])->name('menu');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('publicar',[ Pensaodor::class,'publicar'])->name('Pensador.publicar');
    Route::post('categoria',[Pensaodor::class, 'categoria'])->name('categoria');
    Route::post('presistir',[Pensaodor::class, 'presistir'])->name('presistir');
    Route::get('conectar{id}',[Pensaodor::class, 'conectar'])->name('Pensador.conectar');
    Route::post('editarcategoria{id}',[Pensaodor::class, 'editarcategoria']);
    Route::post('deletecategoria{id}',[Pensaodor::class, 'deletecategoria']);
    Route::post('editarfrase{id}',[Pensaodor::class, 'editarfrase']);
    Route::post('deletefrase{id}',[Pensaodor::class, 'deletefrase']);
});

require __DIR__.'/auth.php';
