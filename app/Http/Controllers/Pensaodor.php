<?php

namespace App\Http\Controllers;

use App\Models\frase;
use App\Models\categoria;
use Illuminate\Http\Request;
use App\Models\categoria_frase;
use Illuminate\Support\Facades\DB;

class Pensaodor extends Controller {
    public function welcome() {
        $categorias = categoria::with( 'frases' )->get();

        return view( 'welcome', compact( 'categorias' ) );
    }

    public function dashboard() {
        $frases = frase::all();
        $categorias = categoria::all();
        return view( 'dashboard', compact( 'frases', 'categorias' ) );
    }

    public function menushare() {
        return view( 'menu-share' );
    }

    public function menu() {
        return view( 'menu' );
    }

    public function publicar() {
        $categoria = categoria::all();
        return view( 'pensador.publicar', compact( 'categoria' ) );
    }

    public function categoria( Request $request ) {
        categoria::create( [ 'nome' => $request->nome, ] );
        return back()->with( 'toast', ' Categoria '.$request->nome.' Craiada ' );
    }

    public function editarcategoria( Request $request, $id ) {
        $categoria = categoria::find( $id );
        $categoria->nome = $request->nome;
        $categoria->update();

        return back()->with( 'toast', ' Categotia '.$request->nome.', Actualizado para '.$categoria->nome );
    }

    public function deletecategoria( $id ) {

        // Inicia uma transação no banco de dados. Isso é útil para garantir que todas as operações dentro do bloco
        // sejam executadas com sucesso, caso contrário, a transação pode ser revertida.
        DB::beginTransaction();

        // Localiza a categoria pelo ID fornecido e atribui à variável `$categoria`.
        $categoria = categoria::find( $id );

        //  Remove todas as associações ( relacionamentos ) entre a categoria e suas frases relacionadas na tabela intermediária.
        $categoria->frases()->detach();

        // Exclui o registro da categoria na tabela 'categorias'.
        $categoria->delete();

        // Confirma a transação, ou seja, todas as alterações realizadas no banco de dados são efetivadas.
        DB::commit();

        return back()->with( 'toast', ' Categotia '.$categoria->nome.' Eliminada' );
    }

    public function conectar( $id ) {
        $categoria = categoria::find( $id );
        return view( 'pensador.conectar', compact( 'categoria' ) );
    }

    public function presistir( Request $request ) {

        $frases = frase::create( [ 'nome' => $request->nome ] );
        $categoria_frase = new categoria_frase();
        $categoria_frase->categoria_id = $request->categoria_id;
        $categoria_frase->frase_id = $frases->id;
        $categoria_frase->save();
        return back()->with( 'toast', ' Frase Publicada' );

    }

    public function verfrase( $id ) {
        $categoria = categoria::find( $id );
        return view( 'frases', compact( 'categoria' ) );
    }

    public function editarfrase( Request $request, $id ) {

        $editarfrase = frase::find( $id );
        $editarfrase->nome = $request->nome;
        $editarfrase->update();
        return back()->with( 'toast', ' Frase: '.$editarfrase->nome.' Actualizada' );
    }

    public function deletefrase( $id ) {

        $deletefrase = frase::find( $id );
        $deletefrase->categoria()->detach();
        $deletefrase->delete();
        return back()->with( 'toast', ' Frase: '.$deletefrase->nome.' Eliminada' );

    }
}