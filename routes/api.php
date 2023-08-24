<?php

use App\Http\Controllers\ApiPensaodor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/Categoria', [ApiPensaodor::class, 'categoria'])->name('categoria');
Route::get('/frase', [ApiPensaodor::class, 'frase'])->name('frase');