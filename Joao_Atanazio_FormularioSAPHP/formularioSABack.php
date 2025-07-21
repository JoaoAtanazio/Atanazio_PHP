<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back end do formulário squii</title>
    <link rel="stylesheet" href="ESTILOSO.CSS" />
</head>
<body>
    <center>
    <h2>
    <?php
        if(isset($_GET['nome_peça'])&& isset($_GET['data_receb'])&& isset($_GET['quantidade_peca'])&& isset($_GET['tipo_peca'])&& isset($_GET['Valor_peca'])&& isset($_GET['fornecedor_peca']))
        {
            echo "Recebida a peça:".$_GET['nome_peça'];
            echo "<br>";
            echo "<br>";
            echo " que foi entregue no dia ".$_GET['data_receb'];
            echo "<br>";
            echo "<br>";
            echo " sua quantidade é de ".$_GET['quantidade_peca']. " Unidades.";
            echo "<br>";
            echo "<br>";
            echo " esta peça é do tipo ".$_GET['tipo_peca'];
            echo "<br>";
            echo "<br>";
            echo " que atualmente tem como valor ".$_GET['Valor_peca']. "R$";
            echo "<br>";
            echo "<br>";
            echo " e o nome do fornecedor que a trouxe é ".$_GET['fornecedor_peca'];
        }
    ?>
    </h2>
    </center>
</body>
</html>