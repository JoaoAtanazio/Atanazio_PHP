<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo formulario com GET</title>
</head>
<body>
    <?php
        if(isset($_GET['nome'])&& isset($_GET['idade']))
        {
            echo "Recebido o cliente ".$_GET['nome'];
            echo "<br>";
            echo " que tem ".$_GET['idade']. ' anos';
        }
    ?>
    <center><tag> João Vitor Atanazio | Desenvolvimento de Sistemas</center>
</body>
</html>