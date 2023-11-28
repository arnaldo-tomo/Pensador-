<?php

use App\Http\Controllers\ApiPensaodor;
use Illuminate\Support\Facades\Route;

Route::get('/Categoria', [ApiPensaodor::class, 'categoria']);
Route::get('/frase', [ApiPensaodor::class, 'frase']);
Route::get('busca/{nome}', [ApiPensaodor::class, 'busca']);