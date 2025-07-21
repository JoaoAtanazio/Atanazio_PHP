<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n1 = 1;
        for ($contador=0; $contador <10; $contador++, $n1++)
        {
            for ($n2 = 0; $n2 <=10; $n2++)
            {
                echo ("$n1 X $n2 = ".$n1 * $n2. "<br>");
            }
            echo ("<br>");
        }     
    ?>
    <center><tag> João Vitor Atanazio | Desenvolvimento de Sistemas</center>
</body>
</html>