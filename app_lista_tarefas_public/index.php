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

				if(url == 'tarefas_pendentes.php'){
					active_1.className = 'list-group-item active'
					active_2.className = 'list-group-item'
					active_3.className = 'list-group-item'
				}
				if(url == 'nova_tarefa.php'){
					active_1.className = 'list-group-item'
					active_2.className = 'list-group-item active'
					active_3.className = 'list-group-item'
				}
				if(url == 'todas_tarefas.php'){
					active_1.className = 'list-group-item'
					active_2.className = 'list-group-item'
					active_3.className = 'list-group-item active'
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

		</script>
	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					App Lista Tarefas
				</a>
			</div>
		</nav>

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
								<h4>Tarefas pendentes</h4>
								<hr />
								<div class="row mb-3 d-flex align-items-center tarefa">
									<div class="col-sm-9">Lavar o carro</div>
									<div class="col-sm-3 mt-2 d-flex justify-content-between">
										<i class="fas fa-trash-alt fa-lg text-danger"></i>
										<i class="fas fa-edit fa-lg text-info"></i>
										<i class="fas fa-check-square fa-lg text-success"></i>
									</div>
								</div>

								<div class="row mb-3 d-flex align-items-center tarefa">
									<div class="col-sm-9">Passear com o cachorro</div>
									<div class="col-sm-3 mt-2 d-flex justify-content-between">
										<i class="fas fa-trash-alt fa-lg text-danger"></i>
										<i class="fas fa-edit fa-lg text-info"></i>
										<i class="fas fa-check-square fa-lg text-success"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>