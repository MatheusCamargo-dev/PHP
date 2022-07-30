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

        /* 2 – Tendo um array $a = [21, 4, 78, 54, 74, 65, 85, 45, 7, 125], 
        escreva um código que some o resultado da soma de cada elemento multiplicado pelo respectivo índice.
         Ex.: 21*0 + 4*1+ 78*2…. 
         O código deve funcionar para qualquer array passado, independente de seu tamanho. */

         $a = [21, 4, 78, 54, 74, 65, 85, 45, 7, 125];
         $soma = 0; 

        // foreach vai executar o bloco de acordo com a quantidade de indices
        // utilizando o token '=>' é possivel armazenar o indice separado do conteúdo

         foreach($a as $indice => $elemento){  
            $soma += $elemento*$indice; //soma vai armazenar toda a multiplicação entre o indice e o elemento da array
         }

         echo $soma;

    ?>
</body>
</html>