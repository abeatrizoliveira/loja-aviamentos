<?php
include "php/connection.php";
session_start();

$sql = "SELECT idusuario, nome, email FROM usuario";
$result = mysqli_query($connection, $sql);

$sql2 = "SELECT idprod, nome, imagem, preco, descricao FROM oliveira";
$result2 = mysqli_query($connection, $sql2);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Betty Aviamentos - Gerenciamento</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-[#FDE3E3] min-h-screen flex flex-col">
  <!-- Navbar -->
  <nav class="bg-gray-100 shadow-lg sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-4">
      <div class="flex justify-between items-center h-16">
        <!-- Logo -->
        <div class="flex-shrink-0 flex items-center">
           <img src="assets/logo(1).png" alt="Logo Betty Aviamentos" class="h-16 w-auto">
        </div>

        <!-- Menu Desktop -->
        <div class="hidden md:flex items-center space-x-8">
          <div class="flex space-x-4">
            <a href="loja.php"
              class="text-[#C75B6B] px-4 py-2 rounded-md font-medium transition duration-300 flex items-center">
              <i class="fas fa-shopping-bag mr-2"></i> Acessar loja
            </a>
          </div>
        </div>

        <!-- Mobile menu button -->
        <div class="md:hidden flex items-center">
          <button id="mobile-menu-button" class="text-gray-800 hover:text-rose-600 focus:outline-none">
            <i class="fas fa-bars text-xl"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white pb-4 px-4 shadow-lg">
      <div class="flex flex-col space-y-2">
        <div class="pt-2 border-t border-gray-200">
          <a href="loja.php"
              class="text-[#C75B6B] px-4 py-2 rounded-md font-medium transition duration-300 flex items-center">
              <i class="fas fa-shopping-bag mr-2"></i> Acessar loja
          </a>
        </div>
      </div>
    </div>
  </nav>

  <div class="bg-[#FDE3E3] flex-1 flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-2xl w-full">
      <div class="flex items-center justify-center mb-6">
        <i class="fas fa-database text-[#C75B6B] text-3xl mr-3"></i>
        <h1 class="text-3xl font-bold text-[#C75B6B]">Sistema de Gerenciamento</h1>
      </div>
      <!--Novo cadastro-->
      <div class="flex flex-col space-y-10">
        <!-- Tabela de produtos -->
               <!--Novo cadastro-->
      <div class="flex justify-between items-center mb-6">
        <h3 class="text-lg font-semibold text-gray-800">Lista de produtos</h3>
        <a href="insertProduto.php">
          <button class="bg-[#C75B6B] hover:bg-[#a94a59] text-white px-4 py-2 rounded-md transition-all btn-hover">
            <i class="fas fa-plus mr-2"></i> Novo Cadastro
          </button>
        </a>
      </div>
        <div class="overflow-x-auto">
          <table class="min-w-full border rounded-lg overflow-hidden shadow">
          <thead class="bg-[#F9C6C6]">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">ID
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                Nome</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                Imagem</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                Preço</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                Descrição</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                Ações</th>
            </tr>
          </thead>
          <tbody>
             <?php
              if ($result2 && mysqli_num_rows($result2) > 0) {
                while ($line2 = mysqli_fetch_assoc($result2)) {
                  echo "<tr>";
                  echo "<td class=\"px-6 py-4 whitespace-nowrap text-sm\">" . htmlspecialchars($line2['idprod']) . "</td>";
                  echo "<td class=\"px-6 py-4 whitespace-nowrap text-sm\">" . htmlspecialchars($line2['nome']) . "</td>";
                  echo "<td class=\"px-6 py-4 whitespace-nowrap text-sm\">" . htmlspecialchars($line2['imagem']) . "</td>";
                  echo "<td class=\"px-6 py-4 whitespace-nowrap text-sm\">" . "R$" . htmlspecialchars($line2['preco']) . "</td>";
                  echo "<td class=\"px-6 py-4 whitespace-nowrap text-sm\">" . htmlspecialchars($line2['descricao']) . "</td>";
                      echo "<td class=\"px-6 py-4 whitespace-nowrap text-sm\">";
                      echo "<a href=\"updateProduto.php?id=" .$line2["idprod"]. "\" class=\"text-indigo-600 hover:text-indigo-900 mr-3\"><i class=\"fas fa-edit\"></i></a>";
                      echo "<a href=\"php/deleteProduto.php?id=" .$line2["idprod"]. "\" class=\"text-red-600 hover:text-red-900\"><i class=\"fas fa-trash-alt\"></i></a>";
                      echo "</td>";
                      echo "</tr>";
                    }
                  } else {
                    echo "<tr><td colspan='4'>Nenhum usuário encontrado.</td></tr>";
                  }
                ?>
          </tbody>
        </table>
        </div>
        
        <!--Tabela de cadastros -->
          <!--Novo cadastro-->
          <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-semibold text-gray-800">Lista de usuários</h3>
          </div>
        <div class="overflow-x-auto">
          <table class="min-w-full border rounded-lg overflow-hidden shadow">
          <thead class="bg-[#F9C6C6]">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">ID
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                Nome</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                E-mail</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                Ações</th>
            </tr>
          </thead>
          <tbody>
             <?php
              if ($result && mysqli_num_rows($result) > 0) {
                while ($line = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td class=\"px-6 py-4 whitespace-nowrap text-sm\">" . htmlspecialchars($line['idusuario']) . "</td>";
                  echo "<td class=\"px-6 py-4 whitespace-nowrap text-sm\">" . htmlspecialchars($line['nome']) . "</td>";
                  echo "<td class=\"px-6 py-4 whitespace-nowrap text-sm\">" . htmlspecialchars($line['email']) . "</td>";
                      echo "<td class=\"px-6 py-4 whitespace-nowrap text-sm\">";
                      echo "<a href=\"../updateUsuario.php?id=" .$line["idusuario"]. "\" class=\"text-indigo-600 hover:text-indigo-900 mr-3\"><i class=\"fas fa-edit\"></i></a>";
                      echo "<a href=\"../deleteUsuario.php?id=" .$line["idusuario"]. "\" class=\"text-red-600 hover:text-red-900\"><i class=\"fas fa-trash-alt\"></i></a>";
                      echo "</td>";
                      echo "</tr>";
                    }
                  } else {
                    echo "<tr><td colspan='4'>Nenhum usuário encontrado.</td></tr>";
                  }
                ?>
          </tbody>
        </table>
        </div>
      </div>
      <a href="php/logout.php"><button class="mt-6 w-full bg-[#C75B6B] hover:bg-[#a94a59] text-white py-2 rounded transition">Sair</button></a>
    </div>
  </div>
  <script src="main.js"></script>
</script>
<script>
// Navbar responsivo sem arquivo externo
document.addEventListener('DOMContentLoaded', function() {
  var btn = document.getElementById('mobile-menu-button');
  var menu = document.getElementById('mobile-menu');
  if(btn && menu) {
    btn.addEventListener('click', function() {
      menu.classList.toggle('hidden');
    });
  }
});
</script>
</body>

</html>