<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');


//clientes
$router->get('/clientes', 'ClientesController@clientes');
$router->post('/clientes', 'ClientesController@adicionar');
$router->get('/clientes/{id}', 'ClientesController@excluir');