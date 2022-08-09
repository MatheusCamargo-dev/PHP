<?php
    session_start();
    // usuarios do sistema (simulando um banco de dados)
    $usuarios_app = [
        array('email' => 'teste@teste.com', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
    ];

    $usuario_autenticado = false; // variavel de autenficação

    // condicional para verificar a autentificação
    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){
        echo 'usuario autenticado';
        $_SESSION['autenticado'] = true;
        header('Location: home.php');

    }
    else{
        $_SESSION['autenticado'] = false;
        header('Location: index.php?login=erro');
    }
    $a=2;
    $b=$a++;
    echo $b;
    
?>