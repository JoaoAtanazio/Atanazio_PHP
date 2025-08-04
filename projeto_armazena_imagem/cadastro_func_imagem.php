<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionário</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro</h1>
        <h2>Funcionário</h2>
<!-- FORMULARIO PARA CADASTRAR UM FUNCIONARIO-->
    <form action="salvar_funcionario.php" method="POST" enctype="multipart/form/data">
        <!-- CAMPO PARA INSERIR O NOME DO FUNCIONARIO -->
        <label for="nome">NOME:</label>
        <input type="text" name="nome" id="nome" required><br>
        <!-- CAMPO PARA INSERIR O TELEFONE DO FUNCIONARIO -->
        <label for="telefone">TELEFONE:</label>
        <input type="text" name="telefone" id="telefone" required><br>

        <label for="foto">Foto:</label>
        <input type="file" name="foto" id="foto" required><br>
        
        <button type="submit">Cadastrar</button>



    </div>
</body>
</html>