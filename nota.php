<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nota1 = 8;
    $nota2 = 4;
    $nota3 = 7;
    $nota4 = 9;
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    if($media >= 7){
        echo ("Você foi aprovado na UC de desenvolvimento de sistemas com a média de ".$media);
    }
    else{
        echo("Você ficou de exame! sua nota foi ".$media);
    }
    ?>
    <center><tag> João Vitor Atanazio | Desenvolvimento de Sistemas</center>
</body>
</html>