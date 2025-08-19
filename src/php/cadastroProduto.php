<?php
include 'connection.php';
session_start();

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['desc'];

// Verifica se veio um arquivo
if(isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0){
    $targetDir = "../uploads/";
    // Garante que a pasta existe
    if(!is_dir($targetDir)){
        mkdir($targetDir, 0777, true);
    }

    $fileName = basename($_FILES['imagem']['name']);
    $targetFile = $targetDir . $fileName;

    // Move o arquivo para a pasta
    if(move_uploaded_file($_FILES['imagem']['tmp_name'], $targetFile)){
        // Salva no banco apenas o nome (ou caminho relativo)
        $sql = "INSERT INTO oliveira (nome, imagem, preco, descricao)
                VALUES ('$nome', 'uploads/$fileName', '$preco', '$descricao')";

        if(mysqli_query($connection, $sql)){
            header("Location: ../gerenciamento.php");
            exit;
        } else {
            echo "Erro ao salvar no banco!";
        }
    } else {
        echo "Erro ao mover o arquivo!";
    }
} else {
    echo "Nenhuma imagem enviada!";
}

mysqli_close($connection);
?>
