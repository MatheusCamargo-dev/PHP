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
        
       foreach($conexao->query($query) as $key => $value){
            if($_POST['email'] == $value['email'] && $_POST['senha'] == $value['senha']){
                $_SESSION['autenticado'] = true;              
                header('Location: home.php');
            }
        }
        header('Location: index.php?login=erro');
    }
?>