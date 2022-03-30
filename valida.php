<?php
// Inicializa uma sessão
session_start();

// Realiza checagem do Status da sessão Condicionalmente
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>