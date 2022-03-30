<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Cadastros</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .container{ width: 350px; padding: 20px; }
        .center-element{ text-align: center;}
    </style>
</head>
<body>
    <div class="container center-element">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Nome</th>
        <th scope="col">CPF</th>
        <th scope="col">RG</th>
        </tr>
    </thead>
        <tbody>
            <tr>

<?php

$handle = fopen("cadastra.txt", "r");

    // Abre o arquivo e lê o conteúdo
    while (!feof($handle)) {
        $line = fgets($handle);
        $array = explode("-", $line);

        // Lê recursivamente o arquivo
        foreach ($array as $content){
            echo "<td>" . $content . "</td>";
        }
    }

// Sai do arquivo
fclose($handle);

?>

            </tr>
        </tbody>
    </table>
    <br><br>
        <a href="welcome.php" class="btn btn-warning">Voltar</a>
    </div>    
</body>
</html>