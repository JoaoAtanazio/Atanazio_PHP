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
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="style.css">
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