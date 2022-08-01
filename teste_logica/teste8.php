<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <style>
        body{
            background-color: black;
            color: blue;
            font-size:2em;
        }
        
    </style>
</head>
    <body>
        <?php 

            /* 
           Crie um algoritmo que encontre o último número primo menor que 500 e exiba os números da sequência fibonacci dentro desse intervalo (1 até número primo encontrado). 

            */

            $primo = 0;
            // laço de repetição para obtenção do ultimo número primo menor que 500
            for ($i=0;$i < 500;$i++){
                $divisores = 0;
                for($j=$i; $j>=1; $j--){
                    if($i % $j == 0){
                        $divisores++;
                    }
                }
                if ($divisores == 2){
                    $primo = $i;
                }
            }
            $a = 0;
            $b = 1;
            $fibonacci = 0;

            // laço de repetição para a impressão do fibonacci até o número primo capturado
            while($fibonacci < $primo){
                echo "$fibonacci <br>";
                $fibonacci = ($a+$b);
                $b = $a;
                $a = $fibonacci;
            }





           
        ?>

    </body>
</html>