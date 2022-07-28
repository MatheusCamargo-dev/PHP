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
        // funções nativa do php para uso de texto
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
        
        echo '<br>';

        // Funções nativas do php para tarefas matemáticas
        $numero = 7.50;

        // ceil($numero) -> arredonda o valor para cima
        echo ceil($numero);
        
        echo '<br>';

        //floor($numero) -> arredonda o valor para baixo
        echo floor($numero);

        echo '<br>';

        // round($numero) -> arredonda o valor com base nas casas decimais
        // >= 50 arredonda pra cima 49<= arredonda para baixo
        echo round($numero);
        
        echo '<br>';

        // rand(x, y) -> gera os valores entre 'x' e 'y'
        // rand() -> gera um número aleatório de 0 até getrandmax()
        echo rand(1, 10);
        echo '<br>';
        echo getrandmax();
        echo '<br>';


        // sqrt($numero) -> retorna a raiz quadra de um número
        echo sqrt($numero);

        echo '<br>';

        //number_format -> formata as casas decimais de um número
        echo number_format((sqrt($numero)), 2, ',','.');
        
        echo '<br>';
        

    ?>
</body>
</html>