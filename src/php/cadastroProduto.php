<?php
include 'connection.php';
session_start();

$nome = $_POST['nome'];
$imagem = $_POST['imagem'];
$preco = $_POST['preco'];
$descricao = $_POST['desc'];


$sql = "INSERT INTO oliveira (nome, imagem, preco, descricao)
        VALUES ('$nome', '$imagem', '$preco', '$descricao')";

if(mysqli_query($connection, $sql)){
    echo "deu certo eee";
    header("Location: ../gerenciamento.php");
} else {
    echo "erro!";
}

mysqli_close($connection);
?>