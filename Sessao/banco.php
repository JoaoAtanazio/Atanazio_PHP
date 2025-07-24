<?php 
    $bdServidor = '127.0.0.1';
    $bdUsuario = 'root';
    $bdSenha = '';
    $bdBanco = 'Joao_Atanazio';
    $conexao = mysqli_connect($bdServidor,$bdUsuario,$bdSenha,$bdBanco);
        if(mysqli_connect_errno()){
            echo "Prolemas para conectar no banco. Verifique os dados";
            die();
        }
        function buscar_tarefas($conexao) {
            $sqlBusca = 'SELECT * FROM tarefas';
            $resultado = mysqli_query($conexao, $sqlBusca); 
            $tarefas = array(); 
            while ($tarefa = mysqli_fetch_assoc($resultado)) { 
                $tarefas[] = $tarefa; 
            }
            return $tarefas;
        }
        function gravar_tarefa($conexao, $tarefa) {
            $sqlGravar = "
            INSERT INTO tarefas
            (tarefa, descricao, prioridade, prazo, concluida)
            VALUES
            (
                '{$tarefa['Tarefa']}',
                '{$tarefa['descricao']}',
                '{$tarefa['prioridade']}',
                '{$tarefa['prazo']}',
                '{$tarefa['concluida']}'
            )    
        ";
    mysqli_query($conexao,$sqlGravar);
}
?>