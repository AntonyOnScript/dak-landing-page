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
        $grupos = app('db')->select("SELECT DISTINCT grupo FROM dakhia.produto WHERE grupo IS NOT NULL ORDER BY grupo;");
        return response()->json($grupos);
    }

    public function listarProdutosPorGrupos($grupos)
    {
        $grupos = urldecode($grupos);
        $gruposArray = explode(",", $grupos);
        foreach($gruposArray as $key => $grupo) {
            $gruposArray[$key] = "'".$grupo."'";
        }
        $grupos = implode(",", $gruposArray);
        $produtos = app('db')->select("SELECT id, grupo, nome, codigo, caracteristicas FROM dakhia.produto WHERE grupo IN ($grupos) ORDER BY nome;");        
        return response()->json($produtos);
    }

    public function consultarProdutos($nome)
    {
        $nome = urldecode($nome);
        $produtos = app('db')->select("SELECT id, grupo, nome, codigo, caracteristicas FROM dakhia.produto WHERE nome LIKE '%$nome%' ORDER BY nome;");        
        return response()->json($produtos);
    }

    public function consultarProduto($id)
    {        
        $produto = app('db')->select("SELECT id, grupo, nome, codigo, caracteristicas FROM dakhia.produto WHERE id = $id;");        
        $produto["propriedades"] = app('db')->select("SELECT id, propriedade, condicao, unidade, norma, seco FROM dakhia.propriedades WHERE id_produto = $id;");
        return response()->json($produto);
    }

    public function gerarPDFProduto($id) 
    {
        //TODO
        return response()->json($id);
    }
}
