<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <link rel="stylesheet" href="style/styleShow.css">
    <link rel="shortcut icon" href="style/icon.png" type="image/x-icon">
    <title>Minha Agenda</title>
</head>
<body>
    <h1 style="text-align: center;">Listar Contatos</h1>
    <div class="content">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                
                <?php
                require_once('../controller/ReadController.php');
                ?>          
    </div>
</body>   
</html>
