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