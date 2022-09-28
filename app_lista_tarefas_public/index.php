<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<script>
			function requisitarPagina(url){
				document.getElementById('conteudo').innerHTML = ''
				if(!document.getElementById('loading')){
					let imgLoading = document.createElement('img')
					imgLoading.id = 'loading'
					imgLoading.src = './img/loading.gif'
					imgLoading.className = 'rounded mx-auto d-block'
					document.getElementById('conteudo').appendChild(imgLoading)
					
				}

				let active_1 = document.getElementById('active_1')
				let active_2 = document.getElementById('active_2')
				let active_3 = document.getElementById('active_3')
				let inserido = document.getElementById('inserido')

				if(url == 'tarefas_pendentes.php'){
					active_1.className = 'list-group-item active'
					active_2.className = 'list-group-item'
					active_3.className = 'list-group-item'
					if(document.getElementById('inserido') != null){
						inserido.className = ''
						inserido.innerHTML = ''
					}
				}
				if(url == 'nova_tarefa.php'){
					active_1.className = 'list-group-item'
					active_2.className = 'list-group-item active'
					active_3.className = 'list-group-item'
					if(document.getElementById('inserido') != null){
						inserido.className = ''
						inserido.innerHTML = ''
					}

				}
				if(url == 'todas_tarefas.php'){
					active_1.className = 'list-group-item'
					active_2.className = 'list-group-item'
					active_3.className = 'list-group-item active'
					if(document.getElementById('inserido') != null){
						inserido.className = ''
						inserido.innerHTML = ''
					}


				}

				let ajax = new XMLHttpRequest();

				ajax.open('GET', url)
				ajax.onreadystatechange = function() {
					if(ajax.readyState == 4 && ajax.status == 200){
						document.getElementById('conteudo').innerHTML = ajax.responseText
						console.log(ajax.status)
						console.log('ajax.status')

					}else if (ajax.readyState == 4 && ajax.status == 404){
						document.getElementById('conteudo').innerHTML = 'requisição finalizada, mas não encontrou o recurso desejado'
						console.log(ajax.status)
					}
				}
				
				ajax.send()
			}
			function editar(id, conteudo_tarefa) {

				let form = document.createElement('form')
				form.action = './app_lista_tarefas/tarefa_controller.php?acao=atualizar'
				form.method = 'POST'
				form.className = 'row'

				let inputTarefa = document.createElement('input')
				inputTarefa.type = 'text'
				inputTarefa.name = 'tarefa'
				inputTarefa.value = conteudo_tarefa
				inputTarefa.className = 'col-9 form-control'

				let inputID = document.createElement('input')
				inputID.type = 'hidden'
				inputID.name = 'id'
				inputID.value = id

				let button = document.createElement('button')
				button.type = 'submit'
				button.className = 'col-3 btn btn-info'
				button.innerHTML = 'Atualizar'

				form.appendChild(inputTarefa)
				form.appendChild(inputID)
				form.appendChild(button)


				let tarefa = document.getElementById('tarefa_'+id)
				tarefa.innerHTML = ''

				tarefa.insertBefore(form, tarefa[0])
			}

			function remover(id, tarefa){
				location.href = 'app_lista_tarefas/tarefa_controller.php?acao=remover&id='+id+'&tarefa='+tarefa
			}

			function marcarRealizado(id){
				location.href = 'app_lista_tarefas/tarefa_controller.php?acao=marcarRealizado&id='+id
			}
		</script>
	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					App Lista
				</a>
			</div>
		</nav>
		<?php	if(isset($_GET['inclusao']) && $_GET['inclusao'] ==  1 ) { ?>
			<div class="bg-success pt-2 text-white d-flex justify-content-center" id="inserido">
				<h5>Tarefa inserida com sucesso!</h5>
			</div>
		<?php } ?>
		<?php	if(isset($_GET['atualizado']) && $_GET['atualizado'] ==  1 ) { ?>
			<div class="bg-success pt-2 text-white d-flex justify-content-center" id="inserido">
				<h5>Tarefa atualizada com sucesso!!!!</h5>
			</div>
		<?php } ?>
		<?php	if(isset($_GET['removido']) && $_GET['removido'] ==  'sucesso' ) { ?>
			<div class="bg-success pt-2 text-white d-flex justify-content-center" id="inserido">
				<h5>Tarefa: ( "<?= $_GET['tarefa'] ?>" ) removida com sucesso!</h5>
			</div>
		<?php } ?>
		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item active" id="active_1"><a href="#" onclick="requisitarPagina('tarefas_pendentes.php')">Tarefas pendentes</a></li>
						<li class="list-group-item" id="active_2"><a href="#" onclick="requisitarPagina('nova_tarefa.php')">Nova tarefa</a></li>
						<li class="list-group-item" id="active_3"><a href="#" onclick="requisitarPagina('todas_tarefas.php')">Todas tarefas</a></li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col" id="conteudo">
								<?php include 'tarefas_pendentes.php';?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>