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
    <!-- Comentário -->
    <?php 
        // var string 
        $nome = 'Matheus';
        $cor = 'preto';
        $idade = 18;
        $atividade_preferida = 'card game';

        // operador .

        echo 'Olá '.$nome.', sua cor preferida é '.$cor.' e você tem '.$idade.' anos de idade e sua atividade preferida é jogar '.$atividade_preferida;

        // utilizando aspas duplas
        echo '<br/>';

        echo "Olá $nome sua cor preferida é $cor e você tem $idade anos de idade e gosta de $atividade_preferida";

        // sem aspas duplas exemplo
        echo '<br/>';
        echo 'Olá $nome sua cor preferida é $cor e você tem $idade anos de idade e gosta de $atividade_preferida';
    ?>
</body>
</html>