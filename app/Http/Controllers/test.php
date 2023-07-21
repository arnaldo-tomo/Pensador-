<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class test extends Controller
{
    public function frases()
    {
        $frase = categoria::all();
        //    dd($frase);
        return view('frases', compact('frase'));
    }
}