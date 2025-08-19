<?php

include 'connection.php';
session_start();

$user = $_POST['email'];
$name = $_POST['nome'];
$pass = $_POST['senha'];

$sql = "INSERT INTO usuario (nome, email, senha)
        VALUES ('$name', '$user', '$pass')";

if(mysqli_query($connection, $sql)){
    echo "deu certo eee";
    header("Location: ../index.html");
} else {
    echo "erro!";
}

mysqli_close($connection);