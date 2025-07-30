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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <title>Atualizar Cliente</title>
    <script>
        function habilitarEdicao(campo) {
            document.getElementById(campo).removeAtributte("readonly");
        }
    </script>    
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
    <h2>Atualizar Cliente</h2>

    <!-- Se houver erro, exibe a mensagem e o campo de buscar -->
     <?php if($msgErro): ?>
        <p style="color:red;"><?= htmlspecialchars($msgErro)?></p>
            <form action="atualizarCliente.php" method="GET">
                <label for="id">ID do Cliente:</label>
                <input type="number" id="id" name="id" required>
                <button type="submit">Buscar</button>
            </form>
        <?php else: ?>
    <!-- Se um cliente foi encontrado, exibe o formulário preenchido -->
            <form action="processarAtualizacao.php" method="POST">
                <input type="hidden" name="id_cliente" value="<?= htmlspecialchars($cliente['id_cliente']) ?>">

                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($cliente['nome']) ?>"readonly onclick="habilitarEdicao('nome')">

                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco"
            value="<?= htmlspecialchars($cliente['endereco']) ?>" readonly
            onclick="habilitarEdicao('endereco')">

                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone"
            value="<?= htmlspecialchars($cliente['telefone']) ?>" readonly
            onlick="habilitarEdicao('telefone')">

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email"
            value="<?= htmlspecialchars($cliente['email']) ?>" readonly
            onlick="habilitarEdicao('email')">

            <button type="submit">Atualizar Cliente</button>
            </form>   
        <?php endif; ?>    
</body>
</html>