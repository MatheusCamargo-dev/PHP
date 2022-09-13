<?php
    

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao ;
    
    if($acao == 'inserir'){
        require "./tarefa.model.php";
        require "./tarefa.service.php";
        require "./conexao.php";
        $tarefa = new Tarefa();

        $tarefa->__set('tarefa', $_POST['tarefa']);

        $conexao = new Conexao();
        // $banco = $conexao->conectar();
        // echo '<pre>';
        // print_r($banco);
        // echo '</pre>';
        
        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->inserir();

        header('Location: ../index.php?inclusao=1');
    } else if($acao == 'recuperar'){
        require "./app_lista_tarefas/tarefa.model.php";
        require "./app_lista_tarefas/tarefa.service.php";
        require "./app_lista_tarefas/conexao.php";

        $tarefa = new Tarefa();
        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefas = $tarefaService->recuperar();
    }
?>