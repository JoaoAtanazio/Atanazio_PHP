<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Formulário Cadastro de peças</title>
  <link rel="stylesheet" href="ESTILOSO.CSS" />
  </head>
  <body bgcolor="efeae2">
    <ul>
        <li><a href="../AtividadeFormulárioSA_comCSS/formularioSA_css.html">Cadastro de Peças</a> </li>
        <li> <a href="../AtividadeFormulárioSA_comCSS/form de funcionários/at_tabela_sa.html">Cadastro de Funcionários</a></li>
        <li class="dropdown">
             <a href="javascript:void(0)" class="dropbtn">Cadastros</a>
            <div class="dropdown-content">  
                <a href="../AtividadeFormulárioSA_comCSS/form de fornecedor/forms_com_css/forms_css_sa.html">Cadastro de Fornecedor</a>
                <a href="../AtividadeFormulárioSA_comCSS/Form de clientes/Atividade_Legal.html">Cadastro de Clientes</a>
                <a href="#">João Vitor Atanazio</a>
            </div>
        </li>
    </ul>

    <center> <font face="Arial Black">
     <form method="GET" action="FormularioSABack.php">
         <table class="tabela_form" name="meuForm" id="meuForm">
             <tr class="form-group">
                 <td rowspan="2"><image src="Tela Inicial.png" height="80" width="100" class="imagem" ></image> </td>
                 <th colspan="2" rowspan="2"><h2 class="textopecas">Cadastro de peças</h2></th>
             </tr>
         <tr class="form-group">
         </tr>
         <tr class="form-group">
             <td> Peça:</td>
             <td> <input type="text" name="nome_peça" placeholder="nome da peça" id="textbox1" id="peca"></td>
         </tr>
         <tr class="form-group">
             <td class="data">Data:</td>
             <td><input type="date" name="data_receb" placeholder="dd/mm/aa" class="data" id="data"></td>
 
         </tr>
 
         <tr class="form-group">
             <td>Quantidade:</td>
             <td><input type="number" name="quantidade_peca" placeholder="Ex: 22" id="quant"></td>
 
         </tr>
 
         <tr class="form-group">
             <td>Tipo:
             </td>
             <td><input type="text" name="tipo_peca" placeholder="Tipo pertencente" id="tipo"></td>
         </tr>
         <tr class="form-group">
             <td>Valor:
             </td>
             <td><input type="number" name="Valor_peca" placeholder="Ex: 59,99R$" id='valor'></td>
         </tr>
         <tr class="form-group">
             <td>Fornecedor:
             </td>
             <td><input type="text" name="fornecedor_peca" placeholder="Ex: Zézinho" class="" id="forn"></td>
         </tr>

 
     </table>

     <input type="reset" class="btn1" value="Limpar"></input>
     <input type="submit" value="Cadastrar" class="btn2" onclick="valida_formulario()"></input>
     </form>
     <footer class="tag">
     <tag><br><br><br> João Vitor Atanazio | Estudante em Técnico de Desenvolvimento de Sistemas </tag>
    </footer>
 </center>
 </font>
 <script src="../AtividadeFormulárioSA_comCSS/validacao_form.js"></script>
 </body>
 </html>