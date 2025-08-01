<?php
    require_once 'conexao_pdo.php';

    $conexao = conectarBanco();

    //Obtendo o ID via GET
    $idCliente = $_GET['id'] ?? null;
    $cliente = null;
    $msgErro = "";

    //Função local para buscar cliente por ID
    function buscarClientePorId($idCliente, $conexao) {
        $stmt = $conexao->prepare("Select id_cliente, nome, endereco, telefone, email FROM cliente WHERE id_cliente = :id");
        $stmt->bindParam(":id", $idCliente, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
    //Se um ID foi enviado, busca o cliente no banco
    if($idCliente && is_numeric($idCliente)){
        $cliente = buscarClientePorId($idCliente, $conexao);

        if(!$cliente){
            $msgErro = "Erro: Cliente não encontrado.";
        }
    } else{
        $msgErro = "Digite o ID do cliente para buscar os dados.";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <title>Atualizar Cliente</title>
    <script>
        function habilitarEdicao(campo) {
            document.getElementById(campo).removeAtributte("readonly");
        }
    </script>    
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
    <h2>Atualizar Cliente</h2>

    <!-- Se houver erro, exibe a mensagem e o campo de buscar -->
     <?php if($msgErro): ?>
        <main class="main-content">
        <div class="container">
        <p style="color:red;"><?= htmlspecialchars($msgErro)?></p>
            <form action="atualizarCliente.php" method="GET">
                <label for="id" class="form-label">ID do Cliente:</label>
                <input type="number" class="form-control" id="id" name="id" required>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        <?php else: ?>
        </div>
        </main>
        <main class="main-content"
        <div class="container">
            <form action="processarAtualizacao.php" method="POST">
                <input type="hidden" name="id_cliente" class="form-label" value="<?= htmlspecialchars($cliente['id_cliente']) ?>">

                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?= htmlspecialchars($cliente['nome']) ?>"readonly onclick="habilitarEdicao('nome')">

                <label for="endereco" class="form-label">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco"
            value="<?= htmlspecialchars($cliente['endereco']) ?>" readonly
            onclick="habilitarEdicao('endereco')">

                <label for="telefone" class="form-label">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone"
            value="<?= htmlspecialchars($cliente['telefone']) ?>" readonly
            onlick="habilitarEdicao('telefone')">

                <label for="email" class="form-label">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email"
            value="<?= htmlspecialchars($cliente['email']) ?>" readonly
            onlick="habilitarEdicao('email')">

            <button type="submit" class="btn btn-primary">Atualizar Cliente</button>
            </form>   
        <?php endif; ?>
        </div>
        </form>        
</body>
</html>