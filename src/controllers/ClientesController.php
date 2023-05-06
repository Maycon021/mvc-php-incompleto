<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Cliente;

class ClientesController extends Controller {

    public function clientes() {
        $clientes = Cliente::select()->execute();

        $this->render('clientes', ['clientes' =>$clientes]);
    }

    public function adicionar(){

     $nome = $_POST['nome'];
     $endereco = $_POST['endereco'];
     $cpf = $_POST['cpf'];
     $bairro = $_POST['bairro'];
     $cidade = $_POST['cidade'];
     $email = $_POST['email'];
     $telefone = $_POST['telefone'];


     Cliente::insert(['nome' => $nome, 
                    'endereco' => $endereco,
                    'cpf' => $cpf,
                    'bairro' => $bairro,
                    'cidade' => $cidade,
                    'email' => $email,
                    'telefone' => $telefone
     ])->execute();



        echo "inserido com sucesso!";




    }

    public function excluir($parametro) {
       
        Cliente::delete()->where('id', $parametro['id'])->execute();

        echo "deletado com sucesso";
    }

    

    

}