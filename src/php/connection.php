<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "BeatrizLeticia";

$connection = new mysqli($server, $user, $pass, $database);

if (!$connection){
    die("Erro na conexão com o banco de dados: " + mysqli_connect_error() );
}

mysqli_select_db($connection, $database );