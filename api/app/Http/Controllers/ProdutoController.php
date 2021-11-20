<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

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
        $grupos = app('db')->select("SELECT DISTINCT grupo FROM produto WHERE grupo IS NOT NULL ORDER BY grupo;");
        return response()->json($grupos);
    }

    public function consultarProduto($id)
    {        
        $produto = app('db')->select("SELECT id, grupo, nome, codigo, caracteristicas FROM produto WHERE id = $id;");        
        $produto["propriedades"] = app('db')->select("SELECT id, propriedade, condicao, unidade, norma, seco FROM propriedades WHERE id_produto = $id;");
        return response()->json($produto);
    }

    public function filtrarProdutos(Request $request)
    {
        try {
            if($request->isMethod('post')) {                
                $post = (object) $request->all();
                $produtos = DB::table('produto');
                    
                if($request->filled('pesquisa')) {                                        
                    $produtos->orWhere(function($query) use($post) {
                        $query->orWhere('nome', 'like', '%'.$post->pesquisa.'%')
                              ->orWhere('codigo', 'like', '%'.$post->pesquisa.'%')
                              ->orWhere('grupo', 'like', '%'.$post->pesquisa.'%');
                    });                               
                }                

                if($request->filled('grupos')) {
                    if(isset($post->grupos) && is_array($post->grupos)) {
                       $produtos->whereIn('grupo', $post->grupos);                                       
                    }
                }
                
                $produtos->orderBy('nome');
                $result = $produtos->get();
                return response()->json($result);  

            } else {
                return response()->json([]);
            }

        } catch(Exception $ex) {
            //TODO
            //Retornar mensagem e status de erro (por exemplo, 404 not found)
            return response()->json([]);
        }
    }

    public function gerarPDFProduto($id) 
    {
        //TODO
        return response()->json($id);
    }
}
