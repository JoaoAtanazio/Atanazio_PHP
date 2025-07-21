<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach(file("explode_livros.txt") as $livro)
        {
            list($titulo, $autor) = explode(",", $livro);
        
    ?>
    <p> Título: <?= $titulo ?>, Autor: <?=$autor ?> </p>
    <?php
        }
    ?>
    <center><tag> João Vitor Atanazio | Desenvolvimento de Sistemas</center>
</body>
</html>