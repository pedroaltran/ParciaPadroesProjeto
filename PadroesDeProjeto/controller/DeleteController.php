<?php

require_once (__DIR__ . '/../config/Database.php');
require_once (__DIR__ . '/../dao/ContatoDAO.php');
require_once (__DIR__ . '/../model/Contato.php');


class DeleteController {

    public function deleta(){

        if(isset($_POST['excluir'])) { 
            $idContato = $_POST['idContato'];

            $conexao = new Database();

            $contatoDAO = new ContatoDAO();
            $contatoDAO->excluirContato($conexao, $idContato);

            header("Location: ../view/index.php");
        }
    }
}


$controller = new DeleteController();
$controller->deleta();
?>
