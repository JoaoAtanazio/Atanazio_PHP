<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        list($nome,$telefone,$codigo) = file("pessoais.txt");
        echo "Nome: $nome <br/><br>";
        echo "Curso: $telefone <br/><br>";
        echo "Passatempo: $codigo <br/><br>";
    ?>
</body>
</html>