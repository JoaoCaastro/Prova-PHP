<?php
include_once("valida.php");
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">       
        body{ font: 14px sans-serif; }
        .container{ width: 350px; padding: 20px; }
        .center-element{ text-align: center;}
    </style>
</head>
<body>
<div class="container">
    <form action="realiza_cadastro.php" method="POST">
        <div class="form-group">
            <label>Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" required>
        </div>
        <div class="form-group">
            <label>CPF</label>
                <input type="number" id="cpf" name="cpf" class="form-control" required>
        </div>
        <div class="form-group">
            <label>RG</label>
                <input type="number" id="rg" name="rg" class="form-control" required>
        </div>
        <div class="form-group center-element">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
        </div>
    </form>
</div>
</body>
</html>
 