<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <link rel="stylesheet" href="style/styleUpdate.css">
    <link rel="shortcut icon" href="style/icon.png" type="image/x-icon">
    <title>Minha Agenda</title>
</head>
<body>
    <div class="container">
        <?php
            require_once (__DIR__ . '/../config/Database.php');
            require_once (__DIR__ . '/../model/Contato.php');
            require_once (__DIR__ . '/../dao/ContatoDAO.php');

            $idContato = $_GET['id'];
            
            $contatoDAO = new ContatoDAO();
            
            $conexao = new Database();
            $contato = $contatoDAO->buscarContatoPorId($conexao, $idContato);

            if ($contato) {
                echo '<h1>Editar Contato</h1>';
                echo '<form method="post" action="../controller/UpdateController.php">';
                echo '<label>ID:</label><input type="text" name="idContato" value="' . $idContato . '" readonly><br>';
                echo '<label>Nome:</label> <input type="text" name="nomeContato" value="' . $contato->getNome() . '"><br>';
                echo '<label>Telefone:</label><input type="text" name="telefoneContato" value="' . $contato->getFone() . '"><br>';
                echo '<label>Email:</label> <input type="text" name="emailContato" value="' . $contato->getEmail() . '"><br>';
                echo '<input type="submit" id="atualizar" value="Atualizar">';
                echo '<button type="button" onclick="window.location.href=\'ShowContato.php\';"> Cancelar</button>';
                echo '</form>';
            } else {
                echo 'Contato não encontrado.';
            }
        ?>
    </div>
</body>
</html>
