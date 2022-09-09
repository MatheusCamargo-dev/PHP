<?php
    session_start();
    if(!empty($_POST['email']) && !empty($_POST['senha'])){
        $dsn = 'mysql:host=localhost;dbname=php_com_db';
        $user =  'root';
        $senha = '';
        try{
            $conexao = new PDO($dsn, $user, $senha);

        } catch(PDOException $e){
            echo 'Erro:'. $e->getCode().' Mensagem: '. $e->getMessage();
        }
        $query = 'SELECT * FROM tb_usuarios';
       $autenticado = false;
       $usuario_id = null;
       $usuario_perfil_id = null;

        // perfis = 'Adm' = 1    
        // perfis = 'Usuário' = 2   
        
        
       foreach($conexao->query($query) as $key => $value){
            if($_POST['email'] == $value['email'] && $_POST['senha'] == $value['senha']){
                $autenticado = true;
                $usuario_id = $value['id'];
                $usuario_perfil_id = $value['perfil_id'];

            }
        }
        if($autenticado){
            $_SESSION['autenticado'] = true;
            $_SESSION['id'] = $usuario_id;
            $_SESSION['perfil'] = $usuario_perfil_id;

            header('Location: home.php');
        }
        else{
            $_SESSION['autenticado'] = false;
            header('Location: index.php?login=erro');
        }
    }else{
        $_SESSION['autenticado'] = false;
        header('Location: index.php?login=erro2');
    }
?>