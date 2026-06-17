<?php

// ===== NOVO CRUD 2 =====

include("../infra/db/connect.php");

session_start();

if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
    exit();
}

$id = $_GET["id"];

$sql = "SELECT * FROM users WHERE id = $id";

$resultado = $conn->query($sql);

$usuario = $resultado->fetch_assoc();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $novoUsuario = $_POST["usuario"];
    $novaSenha = $_POST["senha"];

    $sqlUpdate = "UPDATE users
                  SET username='$novoUsuario',
                      password='$novaSenha'
                  WHERE id=$id";

    $conn->query($sqlUpdate);

    header("Location: home.php");
    exit();
}
?>

<form method="POST">

    <label>Usuário</label>
    <input type="text"
           name="usuario"
           value="<?php echo $usuario['username']; ?>">

    <br><br>

    <label>Senha</label>
    <input type="text"
           name="senha"
           value="<?php echo $usuario['password']; ?>">

    <br><br>

    <button type="submit">Salvar Alterações</button>

</form>