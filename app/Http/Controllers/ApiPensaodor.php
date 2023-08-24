<?php

namespace App\Http\Controllers;

use App\Models\frase;
use App\Models\categoria;
use Illuminate\Http\Request;

class ApiPensaodor extends Controller
{
    public function categoria()
    {
        $categorias = categoria::all();
        return  response()->json(compact('categorias'), 200);
    }
    public function frase(Request $request)
    {
        $frase = frase::all();
        return  response()->json(compact('frase'), 200);
    }
}
