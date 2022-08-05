<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <style>
        body{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <?php 
        // variaveis const

        define('BD_URL', 'endereco_bd_dev');
        define('BD_USER','usuario_dev');
        define('BD_SENHA','senha_dev');

        echo BD_URL;
        echo '<br>';
        echo BD_USER;
        echo '<br>';
        echo BD_SENHA;
        
    ?>
</body>
</html>