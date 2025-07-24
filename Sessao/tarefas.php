<?php session_start(); 
    include "banco.php";

    if (isset($_GET['Tarefa']) && $_GET['Tarefa'] != '') {
        $tarefa = array();
        $tarefa['Tarefa'] = $_GET['Tarefa'];

    if(isset($_GET['descricao'])) { 
        $tarefa['descricao'] = $_GET['descricao']; 
    } else {
        $tarefa['descricao'] = '';
            }

    if(isset($_GET['prazo'])) {
        $tarefa['prazo'] = $_GET['prazo']; 
    } else {
        $tarefa['prazo'] = '';
            }

    $tarefa['prioridade'] = $_GET['prioridade'];

    if(isset($_GET['concluida'])) {
        $tarefa['concluida'] = $_GET['concluida']; 
    } else {
        $tarefa['concluida'] = ''; 
            }

        gravar_tarefa($conexao, $tarefa);
}



    $lista_tarefas = buscar_tarefas($conexao);

    include "template.php";
    

?>