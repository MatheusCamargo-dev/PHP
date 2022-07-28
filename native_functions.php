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
        // funções nativa do php para uso
        $texto = 'matheus';
        // string to lower strtolower($texto) -> Transforma todos os caracteres da string em minúsculos
        echo strtolower($texto);

        echo '<br>';

        // string to upper strtoupper($texto) -> Transforma todos os caracteres da string em maiúsculos
        echo strtoupper($texto);

        echo '<br>';

        // upper case first ucfirst($texto) -> Transforma o PRIMEIRO caracter da string em maiúsculo
        echo ucfirst($texto);

        echo '<br>';

        // string len strlen($texto) -> Conta a quantidade de caracteres de uma string
        echo strlen($texto);

        echo '<br>';

        // string replace str_replace(<procura por>, <substitui por>, $texto) -> Substitui uma cadeia de caractere por uma dentro de uma string.
        echo str_replace('eus','ias',$texto);

        echo '<br>';

        // substr($texto, <posição inicial>, <quantidade de caracteres>) -> Retorna parte de uma string
        // texto é tratado como uma array de caracteres iniciando por 0..1..2..3..4..5
        echo substr($texto, 2, 5);
        

    ?>
</body>
</html>