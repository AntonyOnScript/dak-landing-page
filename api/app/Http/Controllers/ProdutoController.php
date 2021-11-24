<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use stdClass;

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
        $grupos = DB::table('produto')
                    ->select('grupo')
                    ->distinct()
                    ->whereNotNull('grupo')
                    ->orderBy('grupo')
                    ->get();
        return response()->json($grupos);
    }

    public function consultarProduto($id)
    {
        $produto = DB::table('produto')
                ->find($id);
        if(isset($produto) && !empty($produto)) {
            $produto->propriedades = DB::table('propriedades')
                                    ->where('id_produto', $id)
                                    ->orderBy('propriedade')
                                    ->get(['propriedade', 'condicao', 'unidade', 'norma', 'seco']);
        }

        foreach($produto->propriedades as $key => $value) {            
            $value->seco = number_format($value->seco,2,",",".");            
        }
        return response()->json($produto);
    }

    public function listarProdutos(Request $request)
    {
        try {
            if($request->isMethod('get')) {
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
                    if(isset($post->grupos) && !empty($post->grupos) && is_array($post->grupos)) {
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
