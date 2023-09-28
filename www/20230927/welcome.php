<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header('Location: login.php');
    exit();
}

$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bem vindo, <?= $usuario->nome ?></h1>
    <p>Seu email cadastrado é: <?= $usuario->email ?></p>
    <a href="logout.php">Sair</a>
</body>
</html>