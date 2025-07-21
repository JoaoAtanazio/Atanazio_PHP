<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $anos = 16;
    print "You are " .$anos. " years old.\n<br>";
    print "You are $anos years old.\n";
    print 'You are $age years old.\n<br>'; #You are $age years old. \n
    ?>
    <br><br><br>
    <?php
        $cidade = "Curitiba";
        $estado = "PR";
        $idade = 325;
        $frase_capital = "A cidade de $cidade é a capital do $estado";
        $frase_idade = "$cidade tem mais de $idade anos";
        echo $cidade."<br>";
        echo $estado."<br>";
        echo $idade."<br>";
        echo "<h3>$frase_capital </h3>";
        echo "<h4>$frase_idade </h4>";
    ?>
    <br>
    <?php
    $ageth = 16;
    $age = 16;
    print "Today is your $ageth birthday.\n";
    print "Today is your {$age}th birthday.\n";
    ?>
    <center><tag> João Vitor Atanazio | Desenvolvimento de Sistemas</center>
</body>
</html>