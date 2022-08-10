<?php
    require_once('validador_acesso.php');
    include('nav_bar.php');

    $registro = fopen('../../../app_help_desk/registro.txt','r');
    $chamados = [];
    while(!feof($registro)){
      $valores = fgets($registro);
      $chamados[] = $valores;
    }
    fclose($registro);
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Consultar chamado</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
      body{
        background-color: darkslategray;
      }
    </style>
  </head>

  <body>
    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              <?php foreach($chamados as $chamado){  
                $valores_chamado = explode('#',$chamado);

                if ($_SESSION['perfil'] == 2){
                  if ($_SESSION['id'] != $valores_chamado[0]){
                    continue;
                  }
                }
                if (count($valores_chamado) < 5){
                  continue;
                }
                ?>
                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h4 class="card-title"><?php print $valores_chamado[1] ?></h4>
                    <h5 class="card-title"><?php print 'Cliente: '.$valores_chamado[2] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php print 'Categoria: '.$valores_chamado[3] ?></h6>
                    <p class="card-text"><?php print 'Descrição: '.$valores_chamado[4] ?></p>
                  </div>
                </div>
              <?php } ?>
              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>