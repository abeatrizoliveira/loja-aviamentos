<?php
session_start(); 
include 'connection.php';  
$id = $_GET['id'];
$sql = "DELETE FROM oliveira WHERE idprod = $id";
if ($connection->query($sql) === TRUE) {
    session_destroy(); 
    header("Location: ../gerenciamento.php");
    exit;
} else {
    echo "Erro ao excluir o registro: " . $connection->error;
}
$connection->close(); 
?>