<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back end do formulário squii</title>
    <link rel="stylesheet" href="ESTILOSO.CSS" />
</head>
<body>
    <center>
    <h2>
    <?php
    $lista_informacoes = array();
    if (isset($_GET['nome_peça'])) {
        $_SESSION['lista_informacoes'] [] = $_GET['nome_peça'];
    }
    $lista_informacoes = array();
    if (isset($_GET['data_receb'])) {
        $_SESSION['lista_informacoes'] [] = $_GET['data_receb'];
    }
    $lista_informacoes = array();
    if (isset($_GET['quantidade_peca'])) {
        $_SESSION['lista_informacoes'] [] = $_GET['quantidade_peca'];
    }
    $lista_informacoes = array();
    if (isset($_GET['tipo_peca'])) {
        $_SESSION['lista_informacoes'] [] = $_GET['tipo_peca'];
    }
    $lista_informacoes = array();
    if (isset($_GET['Valor_peca'])) {
        $_SESSION['lista_informacoes'] [] = $_GET['Valor_peca'];
    }
    $lista_informacoes = array();
    if (isset($_GET['fornecedor_peca'])) {
        $_SESSION['lista_informacoes'] [] = $_GET['fornecedor_peca'];
    }
    $lista_informacoes = array();

    if (isset($_SESSION['lista_informacoes'])) {
        $lista_informacoes = $_SESSION['lista_informacoes'];
    }
?>
<table>
    <tr>
        <th>Tarefas</th>
    </tr>
<?php foreach ($lista_informacoes as $tarefa) : ?>
    <tr>
        <td><?php echo $tarefa; ?> </td>
</tr>
<?php endforeach; ?>    
    <center><tag> João Vitor Atanazio | Desenvolvimento de Sistemas</center>
    </h2>
    </center>
</body>
</html>