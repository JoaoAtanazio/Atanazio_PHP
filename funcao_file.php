<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        #FILE_IGNORE_NEW_LINES ignorar o \n de cada linha
        $linhas = file ("texto.txt", FILE_IGNORE_NEW_LINES);
        var_dump($linhas);
        foreach ($linhas as $linha_num => $linha){
            echo "Linha #{$linha_num} : ".$linha." <br>";
        }
    ?> 
    <center><tag> João Vitor Atanazio | Desenvolvimento de Sistemas</center>   
</body>
</html>