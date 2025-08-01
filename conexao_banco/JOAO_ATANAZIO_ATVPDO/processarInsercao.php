<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos.css" type="text/css">
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
</body>
</html>
<?php
    require_once 'conexao_pdo.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $conexao = conectarBanco();

        $sql = "INSERT INTO cliente(nome, endereco, telefone, email)
            VALUES(:nome, :endereco, :telefone, :email)";
    

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":nome",$_POST["nome"]);
    $stmt->bindParam(":endereco",$_POST["endereco"]);
    $stmt->bindParam(":telefone",$_POST["telefone"]);
    $stmt->bindParam(":email",$_POST["email"]);
    try{
        $stmt->execute();
        echo "Cliente cadastrado com sucesso!";
    } catch(PDOException $e){
        error_log("Erro ao inserir cliente: ". $e->getMessage());
        echo "Erro ao cadastrar cliente.";
    }
}
?>