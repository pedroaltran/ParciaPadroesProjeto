<?php

require_once (__DIR__ . '/../config/Database.php');
require_once (__DIR__ . '/../dao/ContatoDAO.php');
require_once (__DIR__ . '/../model/Contato.php');


class CreateController {
    
    public function insere() {
        $conexao = new Database();

        $nome = $_POST['nome'];
        $fone = $_POST['fone'];
        $email = $_POST['email'];
        
        $contato = new Contato();
        $contato->setNome($nome);
        $contato->setFone($fone);
        $contato->setEmail($email);

        $contatoDAO = new ContatoDAO();
        $contatoDAO->adicionarContato($conexao, $contato);
    }    
}


$controller = new CreateController();
$controller->insere();
?>
