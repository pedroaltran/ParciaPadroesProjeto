<?php

require_once (__DIR__ . '/../config/Database.php');
require_once (__DIR__ . '/../dao/ContatoDAO.php');
require_once (__DIR__ . '/../model/Contato.php');


class ReadController {

    public function exibe(){
        $conexao = new Database();

        $contatoDAO = new ContatoDAO();
        $contatoDAO->exibirContatos($conexao);
    }
}


$controller = new ReadController();
$controller->exibe();
?>
