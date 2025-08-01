<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    //Habilita relatório detalhado de erros no MySQLi
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

/**
 * Função para conectar ao banco de dados
 * Retorna um objeto de conexão MySQLi ou imterrompe o script em caso de erro.
 */

    function conectadb(){
        $endereco = "localhost"; // Endereço do servidor MySQL
        $usuario = "root"; //Nome de usuário do banco de dados
        $senha = ""; //Senha do banco de dados
        $banco = "empresa"; //Nome do banco de dados
    }

    try{
        //Criação de conexão
        $con = new mysqli($endereco, $usuario, $senha, $banco);

        //Definição do conjunto de caracteres para evitar problemas de acentuação
        $con->set_charset("utf8mb4");
        return $con;
    } catch (Exception $e){
        //Exibe uma mensagem de erro e encerra o script
        die("Erro na conexão:".$e->getMessage());
    }
?>