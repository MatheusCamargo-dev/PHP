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

        /* 
            Usando a função rand(1,100), escreva um script que sorteie 100 números. Você deve armazenar os números pares em uma array chamado $pares, e os impares em um array $impares. No final da execução, exibir uma mensagem informando se a maioria dos números sorteados é par ou impar. 
        */

        $pares = []; //array de números pares
        $impares = []; //array de números impares
        $random; // variavel pra armazenar números random

        // estrutura de repetição for
        for($cont=0;$cont < 100;$cont++){
            $random = rand(1,100); //random recebe um valor aleatório entre 1 e 100
            if ($random%2==0){ // Se o resto de divisão por 2 de random for 0 então o número é par logo $pares recebe $random
                $pares[] = $random;
            }
            else{ // Se não o número é impar logo $impares recebe random
                $impares[] = $random;
            }
        }
        //count conta a quantidade de números de um array
        echo 'Quantidade de números PARES sorteados: '.count($pares).'<hr>'; 
        echo 'Quantidade de números IMPARES sorteados: '.count($impares).'<hr>';

        if (count($pares) > count($impares)){ //se a quantidade de números pares for maior que (>) a quantidade de impares então
            echo 'A maioria dos números sorteados são PARES'; // a maioria dos números são pares
        }
        else if(count($pares) < count($impares)){ // se a quantidade de números pares for menor que (<) a quantidade  de impares então
            echo 'A maioria dos números sorteados são IMPARES'; // a maioria dos números são impares
        }
        else{ //se não, logo pares tem a mesma quantidade de números impares, portanto;
            echo 'Foi sorteado a mesma quantidade de números PARES e IMPARES'; // a quantidade impares e pares é igual
        }

      ?>
</body>
</html>