<?php

// Inicia ou recupera a sessão atual
session_start();

// Remove todos os dados da sessão
session_destroy();

// Redireciona o usuário para a página inicial
header("Location: ../index.php");

// Encerra a execução do script
exit();

?>