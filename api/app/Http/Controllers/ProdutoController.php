<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;

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
        $produto = DB::table('produto')->find($id);
        if(isset($produto) && !empty($produto)) {
            $produto->propriedades = DB::table('propriedades')
                                    ->where('id_produto', $id)
                                    ->orderBy('propriedade')
                                    ->get(['propriedade', 'condicao', 'unidade', 'norma', 'seco AS seco*']);
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

    public function gerarPdfProduto($id) 
    {
        $html = '<style>
                    table td {
                        border: 1px solid #ccc;
                        border-collapse: collapse;
                    }
                </style>';

        $html .= '<table>';
        $produto = DB::table('produto')->find($id);
                
        if(isset($produto) && !empty($produto)) {
            $propriedades = DB::table('propriedades')
                                    ->where('id_produto', $id)
                                    ->orderBy('propriedade')
                                    ->get(['propriedade', 'condicao', 'unidade', 'norma', 'seco']);            
            //Linha
            $html .= '<tr>';
            $html .= '<th colspan="4" style="text-align: left;font-size: 22px;">'. $produto->nome .'</th>';       
            $html .= '<th style="text-align: right;font-size: 22px;">'. $produto->codigo .'</th>'; 
            $html .= '</tr>';
            //Linha
            $html .= '<tr>';            
            $html .= '<th colspan="5" style="text-align: justify;font-weight: normal;">'. $produto->caracteristicas .'</th>'; 
            $html .= '</tr>';
            //Quebra de linha
            $html .= '<tr>';            
            $html .= '<th colspan="5" style="text-align: justify;"><br/></th>'; 
            $html .= '</tr>';
            //Linha
            $html .= '<tr>';            
            $html .= '<td style="text-align: left;font-weight: bold;">Propriedade</td>'; 
            $html .= '<td style="text-align: center;font-weight: bold;">Condição</td>'; 
            $html .= '<td style="text-align: center;font-weight: bold;">Unidade</td>'; 
            $html .= '<td style="text-align: center;font-weight: bold;">Norma</td>'; 
            $html .= '<td style="text-align: center;font-weight: bold;">Seco*</td>'; 
            $html .= '</tr>';
            //Linha
            if(isset($propriedades) && !empty($propriedades)) {
                foreach($propriedades as $key => $propriedade) {
                    $html .= '<tr>';            
                    $html .= '<td style="text-align: left;width: 40%;">'. $propriedade->propriedade .'</td>';
                    $html .= '<td style="text-align: center;width: 20%;">'. $propriedade->condicao .'</td>';
                    $html .= '<td style="text-align: center;width: 10%;">'. $propriedade->unidade .'</td>';
                    $html .= '<td style="text-align: center;width: 20%;">'. $propriedade->norma .'</td>';
                    $html .= '<td style="text-align: center;width: 10%;">'. number_format($propriedade->seco, 2, ',', '.') .'</td>';                    
                    $html .= '</tr>';
                }
            }
            //Quebra de linha
            $html .= '<tr>';            
            $html .= '<th colspan="5" style="text-align: justify;"><br/><br/></th>'; 
            $html .= '</tr>';
            //Linha
            $html .= '<tr>';            
            $html .= '<th colspan="5" style="text-align: justify;font-weight: normal;">* Seco refere-se a um teor de umidade inferior a 0,25 % em peso</th>'; 
            $html .= '</tr>';
            //Linha
            $html .= '<tr>';            
            $html .= '<th colspan="5" style="text-align: justify;font-weight: normal;font-size: 12px;">As propriedades deste informativo técnico se baseiam em valores médios obtidos em laboratório que podem apresentar variações. Portanto não devem ser utilizadas como parâmetros para
                        projetos de engenharia. Todas as informações deste infomativo estão atualizadas até a data de sua impressão.
                        A Dakhia se reserva o direito de alterar as informações de seus produtos bem como descontinuá-los sem prévio aviso, sem que com isso incorra em responsabilidades de quaisquer espécie. A
                        Dakhia não se responsabiliza por divergências em valores relacionados a diferentes parâmetros de processamento. Todas as recomendações de processamento podem variar em função do
                        desenho de cada peça.</th>'; 
            $html .= '</tr>';
            
            $html .= '</table>';            
        } else {
            $html = 'Produto não encontrado.';
        }        
        
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4');

        // Render the HTML as PDF
        $dompdf->render();

        $nomePDF = (isset($produto->nome) && !empty($produto->nome)) ? $produto->nome.'.pdf' : 'document.pdf';
        // Output the generated PDF to Browser
        $dompdf->stream($nomePDF);
    }
}
