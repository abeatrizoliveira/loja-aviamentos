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
    <form id="cadastroForm" class="space-y-4" method="POST" action="php/cadastroUsuario.php" enctype="multipart/form-data">
  <div>
    <label for="cadastroNome" class="block text-black font-medium">Nome</label>
    <input type="text" id="cadastroNome" name="nome" class="w-full border border-[#f9c6c6] bg-white rounded px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-[#C75B6B] text-black" required placeholder="Digite seu nome">
  </div>
  <div>
    <label for="cadastroPreco" class="block text-black font-medium">Email</label>
    <input type="email" id="cadastroPreco" name="email" class="w-full border border-[#f9c6c6] bg-white rounded px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-[#C75B6B] text-black" required placeholder="Digite o preço">
  </div>

  <div>
    <label for="cadastroDesc" class="block text-black font-medium">Senha</label>
    <input type="password" id="cadastroDesc" name="senha" class="w-full border border-[#f9c6c6] bg-white rounded px-3 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-[#C75B6B] text-black" required placeholder="Digite a quantidade">
  </div>

  <input type="submit" class="block w-full bg-[#C75B6B] hover:bg-[#a94a59] text-white font-bold py-2 rounded transition shadow text-center" value="Cadastrar produto">
</form>

</body>
</html>
