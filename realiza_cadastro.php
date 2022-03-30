<?php
include_once("valida.php");

// Seta nome do Arquivo em uma variável
$filename = "cadastra.txt";

// Realiza a checagem do arquivo .txt
  if(!file_exists($filename)){
    $handle = fopen($filename, "w");
  } else {
    $handle = fopen($filename, "a");
  }

// Abre o arquivo e escreve os dados inseridos
 fwrite($handle, $_POST['nome'] . " - " . $_POST['cpf'] . " - " . $_POST['rg']);

// Fecha o arquivo
 fclose($handle);

// Redireciona para a página welcome.php
 header('location: welcome.php')


?>