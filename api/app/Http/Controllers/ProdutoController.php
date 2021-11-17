<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class ProdutoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Retorna todos os grupos de produtos
     * @return Response
     */
    public function listarGrupos()
    {
        $grupos = app('db')->select("SELECT DISTINCT grupo FROM dakhia.produto WHERE grupo IS NOT NULL ORDER BY grupo");
        return response()->json($grupos);
    }

    public function listarProdutosPorGrupos()
    {
        
    }

    public function consultarProduto($nome)
    {
        $nome = urldecode($nome);
        $produto = app('db')->select("SELECT * FROM dakhia.produto WHERE nome LIKE '%$nome%' ORDER BY nome");        
        return response()->json($produto);
    }
}
