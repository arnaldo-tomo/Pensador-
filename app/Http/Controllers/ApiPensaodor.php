<?php

namespace App\Http\Controllers;

use App\Models\frase;
use App\Models\categoria;
use Illuminate\Http\Request;

class ApiPensaodor extends Controller
{
    public function categoria()
    {
        $categorias = categoria::with('frases')->get();
        return  response()->json(compact('categorias'), 200);
    }

    public function busca(Request $request, $nome)
    {
        $bsuca = categoria::where('nome', $nome)->first();
        $allFrases = $bsuca->frases;
        return response()->json(compact('allFrases'), 200);
    }

    public function frase(Request $request)
    {
        $frase = frase::with('categoria')->get();
        return  response()->json(compact('frase'), 200);
    }
}
