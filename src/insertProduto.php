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
    <form id="cadastroForm" class="space-y-4" method="POST" action="php/cadastroProduto.php" enctype="multipart/form-data">
  <div>
    <label for="cadastroNome" class="block text-black font-medium">Nome</label>
    <input type="text" id="cadastroNome" name="nome" required>
  </div>

  <div>
    <label for="cadastroImagem" class="block text-black font-medium">Imagem</label>
    <input type="file" id="cadastroImagem" name="imagem" accept="image/*" required>
  </div>

  <div>
    <label for="cadastroPreco" class="block text-black font-medium">Preço</label>
    <input type="text" id="cadastroPreco" name="preco" required>
  </div>

  <div>
    <label for="cadastroDesc" class="block text-black font-medium">Descrição</label>
    <input type="text" id="cadastroDesc" name="desc" required>
  </div>

  <input type="submit" value="Cadastrar produto">
</form>

</body>
</html>
