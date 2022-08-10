<?php
  require_once('validador_acesso.php');
  include('nav_bar.php');
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Abrir chamado</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="script.js" defer></script>
    <style>
      .card-abrir-chamado {
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

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Abertura de chamado
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form action="registro-chamado.php" method="POST">
                   <div class="form-group">
                      <label>Nome do cliente</label>
                      <input name="cliente" type="text" class="form-control" placeholder="nome completo" required>
                    </div>
                    <div class="form-group">
                      <label>Título</label>
                      <input name="titulo" type="text" class="form-control" placeholder="titulo" required>
                    </div>                  
                    <div class="form-group">
                      <label>Categoria</label>
                      <select class="form-control" name="categoria">
                        <option>Criação Usuário</option>
                        <option>Impressora</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Rede</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea class="form-control" rows="3" name="descricao" required></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                          <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                      </div>
                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>