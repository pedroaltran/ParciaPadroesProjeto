<?php

require_once (__DIR__ . '/../config/Database.php');
require_once (__DIR__ . '/../dao/ContatoDAO.php');
require_once (__DIR__ . '/../model/Contato.php');


class UpdateController {

    public function atualiza(){
        $conexao = new Database();

        $contatoDAO = new ContatoDAO();
        
        $idContato = $_POST['idContato'];

        $nomeContato = $_POST['nomeContato'];
        $telefoneContato = $_POST['telefoneContato'];
        $emailContato = $_POST['emailContato'];
        
        $contato = new Contato();
        $contato->setNome($nomeContato);
        $contato->setFone($telefoneContato);
        $contato->setEmail($emailContato);
        
        $contatoDAO->updateContato($conexao, $contato, $idContato);
    }
}


$controller = new UpdateController();
$controller->atualiza();
?>
