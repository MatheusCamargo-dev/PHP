<?php
    $acao = 'recuperar';
    require './app_lista_tarefas/tarefa_controller.php';
?>
<h4>Todas tarefas</h4>
<hr />
<?php foreach($tarefas as $indice => $tarefa){  ?>
    <div class="row mb-3 d-flex align-items-center tarefa">
        <div class="col-sm-9" id="tarefa_<?php print $tarefa->id?>"> 
            <?php echo $tarefa->tarefa; ?> <?php echo $tarefa->status;?>
        </div>
        <div class="col-sm-3 mt-2 d-flex justify-content-between">
            <i class="fas fa-trash-alt fa-lg text-danger" <?= $tarefa->status == 'realizado' ? 'style="margin-left:7.8vw;"' : ''?> onclick="remover(<?php echo $tarefa->id ?>, '<?= $tarefa->tarefa?>')"></i>
            <?php if($tarefa->status == 'pendente'){ ?>
            <i class="fas fa-edit fa-lg text-info" onclick="editar(<?php echo $tarefa->id?> , '<?php print $tarefa->tarefa ?>')"></i>
            <i class="fas fa-check-square fa-lg text-success" onclick="marcarRealizado(<?php echo $tarefa->id?>)"></i>
            <?php } ?>
        </div>
    </div>
<?php } ?>
