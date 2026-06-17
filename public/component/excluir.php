<?php

include("../infra/db/connect.php");

session_start();

if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
    exit();
}

$id = $_GET["id"];

$sql = "DELETE FROM users WHERE id = $id";

$conn->query($sql);

header("Location: home.php");
exit();

?>