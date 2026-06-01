<?php

// Importa a conexão com o banco de dados
include("infra/db/connect.php");

// Verifica se o formulário foi enviado via POST
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Recebe os dados digitados pelo usuário
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    // Consulta no banco para verificar usuário e senha
    $sql = "SELECT * FROM users
    WHERE username = '$usuario'
    AND password = '$senha'";

    // Executa a consulta
    $resultado = $conn->query($sql);

    // Verifica se encontrou algum registro
    if($resultado->num_rows > 0){

        // Cria uma sessão para o usuário autenticado
        $_SESSION["usuario"] = $usuario;

        // Redireciona para a página principal
        header("Location: public/home.php");
        exit();

    }else{

        // Mensagem de erro caso o login seja inválido
        $erro = "Usuário ou senha inválidos.";
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com PHP</title>
</head>
<body>

    <?php
    // Importa componente adicional da aplicação
    include("../public/component/table.php");
    ?>

    <h2>Login com PHP</h2>

    <!-- Formulário de autenticação -->
    <form method="POST">

        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario">

        <br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha">

        <br><br>

        <?php

        // Exibe mensagem de erro caso exista
        if(isset($erro)){
            echo $erro;
        }

        ?>

        <button type="submit">Entrar</button>

    </form>

</body>
</html>