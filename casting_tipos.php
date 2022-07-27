<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <style>
        body{
            background-color: black;
            color: white;
            font-size: 2em;
        }
    </style>
</head>
<body>
    <?php 
        // gettype() => retorna o tipo da variável
        // casting variavel = (tipo_primitivo)$variavel;
        // int || integer, float || double, boolean || bool
        // true retorna 1 e false retorna 0
        $valor = 10;
        $valor_mod = (boolean)$valor;
        echo ('Valor '.$valor.' Tipo: '.gettype($valor));
        echo ('<br>Valor '.$valor_mod.' Tipo: '.gettype($valor_mod));

    ?>
</body>
</html>