<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <style>
        body{
            background-color: black;
            color: white;
            font-size:2em;
        }
    </style>
</head>
<body>
    <?php 

        $a = 0; 
        $b = 0; 
        $ar1 = [1, 2, 3, 4, 5, 6, 7]; //array 1 de contagem sequencial
        $ar2 = [10, 20, 30, 40, 50]; //array 2 interpolando de 10 em 10
        do { 
         $b += $ar1[$a]*$ar2[$a]; // erro linha 21 ?!
         // b recebe b + array 1 [a] * array 2 [a];
         $a++; 
        } while ($a < count($ar1)); // enquanto (a < 7);

        // o erro está que a quantidade de indices entre os arrays é diferente
        // a solução está entre trocar o critério de parada para $ar2 ou aumentar o número de indices de $ar2
        echo $b;
    ?>
</body>
</html>