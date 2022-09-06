<?php 
    $dsn = 'mysql:host=localhost;dbname=php_com_db';
    $user =  'root';
    $senha = '';
    try{
        $conexao = new PDO($dsn, $user, $senha);


    } catch(PDOException $e){
        echo 'Erro:'. $e->getCode().' Mensagem: '. $e->getMessage();
    }
    
?>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style></style>
    <title>Document</title>
</head>
<body>
        <form action="">
            <input type="text" placeholder="usuario">
            <br>
            <input type="text">

        </form>
</body>
</html>