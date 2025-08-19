<?php
include 'php/connection.php';
if (isset($_GET['id'])) {
$id = $_GET['id'];
$sql = "SELECT * FROM usuario WHERE idusuario = $id";
$result = $connection->query($sql);

  if($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $nome = $row['nome'];
      $email = $row['email'];

    } else {
      echo "Produto não encontrado!";
      exit();
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "UPDATE usuario SET nome='$nome', email='$email' WHERE idusuario=$id";

    if ($connection->query($sql) === TRUE) {
        echo "Registro atualizado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
    
    header("Location: gerenciamento.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Betty Aviamentos - Cadastro</title>
  <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#FDE3E3] min-h-screen flex items-center justify-center">
  <div class="bg-white/90 shadow-lg rounded-lg p-8 w-full max-w-md border border-[#f9c6c6]">
    <div class="flex justify-center mb-2">
      <img src="assets/logo(1).png" alt="Logo Betty Aviamentos" class="h-20 w-auto">
    </div>
    <form id="cadastroForm" class="space-y-4" method="POST" action="updateUsuario.php">
        <input type="hidden" id="cadastroNome" name="id" class="w-full border border-[#f9c6c6] bg-white rounded px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-[#C75B6B] text-black" required placeholder="Digite o nome do produto" value="<?php echo $id ?>">
      <div>
        <label for="cadastroNomeUser" class="block text-black font-medium">Nome</label>
        <input type="text" id="cadastroNomeUser" name="nome" class="w-full border border-[#f9c6c6] bg-white rounded px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-[#C75B6B] text-black" required placeholder="Digite seu nome" value="<?php echo $nome ?>">
      </div>
      <div>
        <label for="cadastroEmail" class="block text-black font-medium">E-mail</label>
        <input type="email" id="cadastroEmail" name="email"  class="w-full border border-[#f9c6c6] bg-white rounded px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-[#C75B6B] text-black" required placeholder="Digite seu e-mail" value="<?php echo $email ?>">
      </div>
  <input type="submit" class="block w-full bg-[#C75B6B] hover:bg-[#a94a59] text-white font-bold py-2 rounded transition shadow text-center" value="Alterar"></input>
    </form>
  </div>
</body>
</html>
