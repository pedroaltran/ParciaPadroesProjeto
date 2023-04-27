<?php
require_once('../config/Database.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <link rel="stylesheet" href="style/styleCreate.css">
    <link rel="shortcut icon" href="style/icon.png" type="image/x-icon">
    <title>Minha Agenda</title>
</head>
<body>
    <h1>Adicionar Contato</h1>
    <form method="post" action="../controller/CreateController.php">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <label for="fone">Telefone:</label>
        <input type="text" name="fone" id="fone" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <input type="submit" value="Salvar">
        <button type="button" onclick="window.location.href='index.php'">Cancelar</button>
    </form>
</body>
</html>
