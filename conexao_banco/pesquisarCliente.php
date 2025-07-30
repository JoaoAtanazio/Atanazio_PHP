<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <title>Document</title>
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
    <?php
    require_once 'conexao_pdo.php';

    $conexao = conectarBanco();

    $busca = $_GET['busca'] ?? '';

    if(!$busca) {
        ?>
    <form action="pesquisarCliente.php" method="GET">
        <label for="busca" class="busca">Digite o ID ou Nome:</label>
        <input type="text" id="busca" name="busca" class="busca" required>
        <button type="submit" class="busca">Pesquisar</button>
    </form>
    <?php
    exit;
}
if(is_numeric($busca)){
    $stmt = $conexao->prepare("SELECT id_cliente, nome, endereco, telefone, email FROM cliente WHERE id_cliente = :id");
    $stmt->bindParam(":id", $BUSCA, PDO::PARAM_INT);
} else{
    $stmt = $conexao->prepare("SELECT id_cliente, nome, endereco, telefone, email FROM cliente WHERE nome LIKE :nome");
    $buscaNOME = "%$busca%";
    $stmt->bindParam(":nome", $buscaNome, PDO::PARAM_STR);
}

$stmt->execute();
$clientes = $stmt->fetchAll();
if(!$clientes) {
    die("Erro: Nenhum cliente encontrado.");
}
?>
<table border="1">
    <tr>
        <th>ID</th>        
        <th>Nome</th>        
        <th>Endereço</th>        
        <th>Telefone</th>        
        <th>E-mail</th>        
        <th>Ação</th>    
    </tr>   
<?php
    foreach ($clientes as $cliente): ?>
    <tr>
        <td><?= htmlspecialchars($cliente['id_cliente']) ?></td>        
        <td><?= htmlspecialchars($cliente['nome']) ?></td>       
        <td><?= htmlspecialchars($cliente['endereco']) ?></td>       
        <td><?= htmlspecialchars($cliente['telefone']) ?></td>       
        <td><?= htmlspecialchars($cliente['email']) ?></td>
        <td>
        <a href="atualizarCliente.php?id=<?=$cliente['id_cliente']?>">Editar</a>
            </td>
    </tr>
    <?php endforeach; ?>
</table>         
<tag>João Vitor Atanazio | Desenvolvimento de Sistemas</tag>      
</body>
</html>