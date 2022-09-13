<?php
    $acao = 'recuperar';
    require './app_lista_tarefas/tarefa_controller.php';
?>


<h4>Todas tarefas</h4>
<hr />
<?php foreach($tarefas as $indice => $tarefa){  ?>
    <div class="row mb-3 d-flex align-items-center tarefa">
    <div class="col-sm-9"> <?php echo $tarefa->tarefa; ?> <?php echo $tarefa->status; ?></div>
    <div class="col-sm-3 mt-2 d-flex justify-content-between">
    <i class="fas fa-trash-alt fa-lg text-danger"></i>
    <i class="fas fa-edit fa-lg text-info"></i>
    <i class="fas fa-check-square fa-lg text-success"></i>
    </div>
    </div>
<?php } ?>
