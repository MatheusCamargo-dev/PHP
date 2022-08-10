<?php
    session_start();
    
    $usuario_autenticado = false; // variavel de autenficação
    $usuario_id = null;
    $usario_perfil_id = null;

    $perfis = [1 => 'Administrativo', 2 => 'Usuário'];

    // usuarios do sistema (simulando um banco de dados)
    $usuarios_app = [
        array('id' => 1 ,'email' => 'teste@teste.com', 'senha' => '123456', 'perfil_id' => 2),
        array('id' => 2 ,'email' => 'user@teste.com.br', 'senha' => 'abcd', 'perfil_id' => 1),
        array('id' => 3 ,'email' => 'matheusloldubr@gmail.com', 'senha' => '123', 'perfil_id' => 1),
        array('id' => 4 ,'email' => 'admin@adm.com', 'senha' => 'admin', 'perfil_id' => 2),

    ];

    // condicional para verificar a autentificação
    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }

    //verifica a autentificação para dar os valores do indice de SESSION
    if($usuario_autenticado){
        $_SESSION['autenticado'] = true;
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil'] = $usuario_perfil_id;
        header('Location: home.php'); //redireciona pra home
    }
    else{
        $_SESSION['autenticado'] = false;
        header('Location: index.php?login=erro'); //redireciona retornando um erro para o index
    }
    
?>