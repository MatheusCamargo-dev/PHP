<?php
    require "./tarefa.model.php";
    require "./tarefa.service.php";
    require "./conexao.php";

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $tarefa = new Tarefa();

    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();
    // $banco = $conexao->conectar();
    // echo '<pre>';
    // print_r($banco);
    // echo '</pre>';
    
    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->inserir();



    echo '<pre>';
    print_r($tarefaService);
    echo '</pre>';

?>