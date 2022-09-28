<?php
    

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao ;
    // echo $acao;
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
    } else if($acao == 'atualizar'){
        require "./tarefa.model.php";
        require "./tarefa.service.php";
        require "./conexao.php";
        
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_POST['id']);
        $tarefa->__set('tarefa', $_POST['tarefa']);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        if($tarefaService->atualizar()){
            header('Location: ../index.php?atualizado=1');
        }   
    } else if($acao == 'remover'){
        require "./tarefa.model.php";
        require "./tarefa.service.php";
        require "./conexao.php";
        
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_GET['id']);
        $tarefa->__set('tarefa', $_GET['tarefa']);
        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        if($tarefaService->remover()){
            header('Location: ../index.php?removido=sucesso&tarefa='.$_GET['tarefa']);
        }


    } else if($acao == 'marcarRealizado'){
        require "./tarefa.model.php";
        require "./tarefa.service.php";
        require "./conexao.php";
        
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_GET['id']);
        $tarefa->__set('id_status', 2);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);

        if($tarefaService->marcarRealizado()){
            header('Location: ../index.php?marcar_realizado=sucesso');
        }   
    }
    else if($acao == 'recuperarTarefasPendentes'){
        require "./app_lista_tarefas/tarefa.model.php";
        require "./app_lista_tarefas/tarefa.service.php";
        require "./app_lista_tarefas/conexao.php";

        $tarefa = new Tarefa();
        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefasPendentes = $tarefaService->recuperarTarefasPendentes();   
    }
?>