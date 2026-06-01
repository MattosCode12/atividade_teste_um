<?php

// Inicia ou recupera a sessão do usuário
session_start();

// Configurações do banco de dados
$host = "localhost";
$user = "root";
$pass = "root";
$db = "sistema_simples";

// Cria a conexão com o MySQL
$conn = new mysqli($host, $user, $pass, $db);

    // if($conn->connect_error){
    //     die("Erro na conexão");
    // }else{
    //     echo ("<p> BD: ok </p>");
    // }
?>