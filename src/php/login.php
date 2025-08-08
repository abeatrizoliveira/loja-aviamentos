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
        
        $user = $_POST['adicionardps'];
        $pass = $_POST['adicionardps'];

        $sql = "SELECT * FROM usuarios WHERE nome = '$user'";
        $result = mysqli_query($mysqli, $sql);
     
        if($result && mysqli_num_rows($result) === 1){
            $line = mysqli_fetch_assoc($result);

            if($password == $line['senha']){
                mysqli_query($mysqli, $updateAccess);
                $_SESSION['id'] = $line['idusuario'];
                $_SESSION['nome'] = $line['nome'];

                header("Location: ../pages/home.php");
                }
            }else{
                echo "<div class='error'>";
                echo "<h2>ERROR!</h2>";
                echo "User not found.<br> Please go back and try again.<br>";
                echo "</div>";
                exit();
            }
        mysqli_close($mysqli);
        ?>
    </body>
</html>
