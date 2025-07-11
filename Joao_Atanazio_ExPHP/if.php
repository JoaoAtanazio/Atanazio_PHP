<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = "Xenia";
        $nome = NULL; 
        if (isset($nome)) {
            print "Essa linha não vai ser alcançada"; 
        }
    ?>
</body>
</html>