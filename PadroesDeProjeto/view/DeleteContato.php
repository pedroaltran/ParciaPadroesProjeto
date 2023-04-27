<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <link rel="stylesheet" href="style/styleDelete.css">
    <link rel="shortcut icon" href="style/icon.png" type="image/x-icon">
    <title>Minha Agenda</title>
</head>
<body>
<div class="container">
    <?php 
        require_once (__DIR__ . '/../config/Database.php');
        require_once (__DIR__ . '/../dao/ContatoDAO.php');

        $idContato = $_GET['id'];

        $contatoDAO = new ContatoDAO();

        $conexao = new Database();
        $contato = $contatoDAO->buscarContatoPorId($conexao, $idContato);

        $nome = $contato->getNome();
    ?>

    <h1>Deseja realmente excluir o contato de <?php echo $nome ?> ? </h1>
    <form method="post" action="../controller/DeleteController.php">
        <input type="hidden" name="idContato" value="<?php echo $idContato; ?>">
        <input type="submit" id="excluir" name="excluir" value="Sim">
        <button type="button" onclick="window.location.href='ShowContato.php';">Não</button>
    </form>
</div>

</body>   
</html>
