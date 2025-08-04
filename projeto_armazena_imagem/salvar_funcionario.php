<?php
// FUNCAO PARA REDIMENSIONAR A IMAGEM

function redimensionarImagem($imagem,$largura,$altura){
    //OBTÉM AS DIMENSOES ORIGINAIS DA IMAGEM
    //getimagesize() RETORNA A LARGURA E A ALTURA DE UMA IMAGEM
    list($larguraOriginal,$alturaOriginal) = getimagesize($imagem);

    //CRIA UMA NOVA IMAGEM EM BANCO COM AS NOVAS DIMENSOES
    //imagecreatetruecolor() CRIA UMA NOVA IMAGEM EM BRANCO EM ALTA QUALIDADE
    $novaImagem = imagecreatetruecolor($largura,$altura)
    
    // CARREGA A IMAGEM ORIGINAL (JPEG) A PARTIR DO ARQUIVO
    //imagecreatefromjpeg() CRIA UMA IMAGEM PHP A PARTIR DE UM JPEG
    $imagemOriginal = imagecreatefromjpeg($imagem);

    //COPIA E REDIMENSIONA A IMAGEM ORIGINAL PARA A NOVA
    //imagecopyresampled() COPIA COM REDIMENSIONAMENTO E SUAVIZAÇAO
    imagecopyresampled($novaImagem,$imagemOriginal, 0, 0, 0, 0, $largura, $altura, $larguraOriginal, $alturaOriginal);

    //INICIA UM BUFFER PARA GUARDAR A IMAGEM COM O TEXTO BINARIO
    //ob_start() INICIA O "output bufferring" GUARDANDO A SAIDA
    ob_start();

    // imagejpeg() ENVIA A IMAGEM PARA O OUTPUT
    imagejpeg($novaImagem);

    //OB_GET_CLEAN PEGA O CONTEUDO DO BUFFER E LIMPA
    $dadosImagem = ob_get_clean();

    // LIBERA A MEMORIA USADA PELAS IMAGENS
    //imagedestroy() LIMPA A MEMORIA DA IMAGEM CRIADA
    imagedestroy($novaImagem);
    imagedestroy($imagemOriginal);

    // RETORNA A IMAGEM REDIMENSIONADA EM FORMATO BINARIO
    return $dadosImagem;
} 

//CONFIGURAÇÃO DO BANCO DE DADOS
$host = 'localhost';
$dbname = 'bd_imagem';
$username = 'root';
$password = '';

try{
    // CONEXAO COM O BANCO DE DADOS USANDO PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE); //DEFINE QUE ERROS VAO LANÇAR EXCEÇÕES

    // VERIFICA SE FOI UM POST E SE TEM ARQUIVO 'foto'
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['foto'])){
        
        if($_FILES['foto']['error'] == 0){
            $nome = $_POST['nome']; // PEGA O NOME DO FUNCIONARIO
            $telefone = $_POST['telefone']; // PEGA O TELEFONE DO FUNCIONARIO
            $nomeFoto = $_FILES['foto']['name']; // PEGA O NOME ORIGINAL DO ARQUIVO
            $tipoFoto = $_FILES['foto']['type']; // PEGA O TIPO MIME DA IMAGEM

        // REDIMENSIONA A IMAGEM
        $foto = redimensionarImagem($_FILES['foto']['name'].)
        }
    }
}
?>