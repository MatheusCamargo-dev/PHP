<?php 
    $dsn = 'mysql:host=localhost;dbname=php_com_db';
    $user =  'root';
    $senha = '';
    try{
        $conexao = new PDO($dsn, $user, $senha);

        $query = '
            select * from tb_usuarios
        ';

        $stmt = $conexao->query($query);
        $lista_usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // echo '<pre>';
        // print_r($lista_usuario);
        // echo '<pre><br>';

        // echo 'Nome:'.$lista_usuario[0]['nome'];
        // echo '<br>Email:'.$lista_usuario[0]['email'];

        foreach ($lista_usuario as $key => $value){
            // echo 'User:'.$usario[0].'<br>';
            // foreach ($value as $valores){
            //     echo 'Valor: '.$valores.'<br>';
            // }
            // print_r ('<pre>');
            // print_r ($value);
            // print_r ('<pre>');
            echo '<br>Nome: '.$value['nome'];
            echo '<br>Email: '.$value['email'];

        }

        echo '<hr>';
        
        foreach($conexao->query($query) as $key => $value){
            echo '<br>Nome: '.$value['nome'];
            echo '<br>Email: '.$value['email'];
        }

    } catch(PDOException $e){
        echo 'Erro:'. $e->getCode().' Mensagem: '. $e->getMessage();
    }
    
?>