<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Falha no login</title>
</head>
    <body>
        <?php

        include 'connection.php';
        session_start();
        
        $user = $_POST['loginUser'];
        $pass = $_POST['loginPass'];

        $sql = "SELECT * FROM usuario WHERE email = '$user'";
        $result = mysqli_query($connection, $sql);
     
        if($result && mysqli_num_rows($result) === 1){
            $line = mysqli_fetch_assoc($result);

            if($pass == $line['senha']){
                $_SESSION['id'] = $line['idusuario'];
                $_SESSION['nome'] = $line['nome'];
                $_SESSION['email'] = $line['email'];


                header("Location: ../gerenciamento.php");
                }
            }else{
                echo "<div class='error'>";
                echo "<h2>ERRO!</h2>";
                echo "Usuário não encontrado.<br> Tente novamente.<br>";
                echo "</div>";
                exit();
            }
        mysqli_close($connection);
        ?>
    </body>
</html>
