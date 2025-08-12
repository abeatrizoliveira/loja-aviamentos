<?php

include 'connection.php';
session_start();

$name = $_POST['adicionar aqui depois'];
$password = $_POST['adicionar aqui depois'];

$sql = "INSERT INTO usuarios (name, password)
VALUES ('$name', '$password')";

if(mysqli_query($mysqli, $sql)){
    header("Location: add depois");
} else {
    echo "erro!";
}

mysqli_close($connection);
