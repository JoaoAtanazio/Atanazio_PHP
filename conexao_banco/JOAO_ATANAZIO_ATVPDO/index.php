<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="body">
  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
           Clientes
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="atualizarCliente.php">Atualizar </a></li>
            <li><a class="dropdown-item" href="deletarCliente.php">Deletar </a></li>
            <li><a class="dropdown-item" href="InserirCliente.php">Inserir </a></li>
            <li><a class="dropdown-item" href="listarClientes.php">Listar </a></li>
            <li><a class="dropdown-item" href="pesquisarCliente.php">Pesquisar </a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  
  <center>
    <h1>Menu de Páginas</h1>
  
    <div class="navega">
      <a href="atualizarCliente.php" class="btn btn-dark div navega">Atualizar Clientes </a>
      <a href="deletarCliente.php" class="btn btn-dark div navega">Deletar Clientes </a>
      <a href="inserirCliente.php" class="btn btn-dark div navega">Inserir Clientes </a>
      <a href="listarClientes.php" class="btn btn-dark div navega">Listar Clientes </a>
      <a href="pesquisarCliente.php" class="btn btn-dark div navega">Pesquisar Clientes </a>
    </div>  

    <footer>
    <tag>João Vitor Atanazio | Desenvolvimento de Sistemas</tag>
</center>  
</footer>
</body>
</html>