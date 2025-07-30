<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <title>Atualizar Cliente</title>
    <title>Cadastro de Cliente</title>
</head>
<body>
     <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 text-white menu">Menu de páginas</a></li>
        </ul>
        </div>
      </div>
  </header>
    <h2>Cadastro de Cliente</h2>
    <form action="processarDelecao.php" method="POST" class="form">
        <label for="id">ID do Cliente:</label>
        <input type="number" id="id" name="id" required>

        <button type="submit">Excluir Cliente</button>
    </form>    
    <form action="processarInsercao.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">Cadastrar Cliente</button>
    </form>    
    <tag>João Vitor Atanazio | Desenvolvimento de Sistemas</tag>
</body>
</html>