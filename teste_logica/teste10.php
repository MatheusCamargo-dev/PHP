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
           Crie um script que seja capaz de encriptar uma string e depois decriptar a mesma. Para isso você pode usar como sugestão o seguinte algoritmo:  
            Criptar: Receber a string e coloque cada letra 5 casas a frente (usar tabela ASCII como referencia) e depois inverter a ordem das letras e mostrar o resultado final usando hexadecimal. 
            Decriptar: Receber um hexadecimal e fazer o processo inverso para mostrar a string original.


            https://www.php.net/manual/pt_BR/function.chr.php
            https://www.php.net/manual/pt_BR/function.ord.php

            */


            $texto = "Olá, meu nome é Matheus";

            function criptarMensagem($texto){

                for ($i=0; $i<(strlen($texto));$i++){
                    $ascii[] = ord($texto[$i])+5;
                }

                $reverse = array_reverse($ascii);

                for ($h=0; $h<count($reverse); $h++){
                    $hex = $reverse[$h];
                    $hexadecimal[] = hexdec($hex);
                }
                return $hexadecimal;
            }

            function descriptarMensagem($hexadecimal){

                for ($h=0; $h<count($hexadecimal); $h++){
                    $dec = $hexadecimal[$h];
                    $decimal[] = dechex($dec);
                }

                $decimal = array_reverse($decimal);

                for ($j=0; $j<count($decimal);$j++){
                    $valor = $decimal[$j]-5;
                    $descripto[] = chr($valor);
                }  

                return implode($descripto);
            }


            $chave = criptarMensagem($texto);
            echo 'Mensagem criptografada: '.implode($chave).'<hr>';
            echo 'Mensagem descriptografada: '.descriptarMensagem($chave);


            

           

        ?>

    </body>
</html>