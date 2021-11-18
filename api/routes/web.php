<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/grupos/listar', 'ProdutoController@listarGrupos');

$router->get('/produtos/listar', 'ProdutoController@listarProdutos');

$router->get('/produtos/procurar/{nome}', 'ProdutoController@consultarProdutos');

$router->get('/produtos/consultar/{id:[0-9]+}', 'ProdutoController@consultarProduto');

$router->get('/produtos/listar/{grupos}', 'ProdutoController@listarProdutosPorGrupos');

//TODO
$router->get('/produtos/gerarPDF/{id}', 'ProdutoController@gerarPDFProduto');