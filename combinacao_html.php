<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Função usada para defnir fuso horário padrão
        date_default_timezone_set('America/Los_Angeles');
        //Manipulando HTML e PHP
        $data_hoje = date ("d/m/y", time());
    ?>
    <p align="center">Hoje é dia <?php echo $data_hoje; ?>
    <center><tag> João Vitor Atanazio | Desenvolvimento de Sistemas</center>
</body>
</html>