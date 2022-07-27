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
        // operadores aritméticos
        $n1 = 10;
        $n2 = 5;
        echo ("A soma entre $n1 e $n2 é ".($n1 + $n2));
        echo ("<br>A subtração entre $n1 e $n2 é ".($n1 - $n2));
        echo ("<br>A multiplicação entre $n1 e $n2 é ".($n1 * $n2));
        echo ("<br>A divisão entre $n1 e $n2 é ".($n1 / $n2));
        echo ("<br>O resto da divisão entre $n1 e $n2 é ".($n1 % $n2));
        echo ("<br>A potência de 10² é ".(10 ** 2));
    ?>
</body>
</html>