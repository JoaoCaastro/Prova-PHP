<?php
include_once("valida.php");
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>Seja Bem-vindo.</h1>
    </div>
    <p>
        <a href="cadastro.php" class="btn btn-primary">Cadastrar</a>
        <br><br>
        <a href="lista_cadastro.php" class="btn btn-warning">Listar</a>
        <br><br>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </p>
</body>
</html>