<?php
    require 'conexao_pdo.php';

$conexao = conectarBanco();
$stmt = $conexao->prepare("Select * from cliente");
$stmt->execute();
$clientes = $stmt->fetchAll();    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="style.css">
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
    <h2>Lista de Clientes</h2>
    
        <table border="1" class="table">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>E-mail</th>
            </tr>
<?php foreach($clientes as $cliente):?>     
    <tr>
        <td><?=htmlspecialchars($cliente["id_cliente"])?></td>           
        <td><?=htmlspecialchars($cliente["nome"])?></td>           
        <td><?=htmlspecialchars($cliente["endereco"])?></td>           
        <td><?=htmlspecialchars($cliente["telefone"])?></td>           
        <td><?=htmlspecialchars($cliente["email"])?></td>    
    </tr>
     <?php endforeach; ?>
</table>  
<tag>João Vitor Atanazio | Desenvolvimento de Sistemas</tag>
</body>
</html>