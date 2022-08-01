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
            https://www.php.net/manual/pt_BR/function.array-reverse.php
            */


            $texto = "Olá, meu nome é Matheus"; //texto

            //função de criptar mensagem
            function criptarMensagem($texto){

                //convertendo a mensagem para tabela ascii
                for ($i=0; $i<(strlen($texto));$i++){
                    $ascii[] = ord($texto[$i])+5;
                }

                //invertando os valores da mensagem em ascii
                $reverse = array_reverse($ascii);

                //passando os valores invertidos para hexadecimal
                for ($h=0; $h<count($reverse); $h++){
                    $hex = $reverse[$h];
                    $hexadecimal[] = hexdec($hex);
                }
                //retornando a mensagem como hexadecimal
                return $hexadecimal;
            }

            //função para descriptar a mensagem
            function descriptarMensagem($hexadecimal){
                // realizando o processo reverso
                // convertendo o hexadecimal para decimal
                for ($h=0; $h<count($hexadecimal); $h++){
                    $dec = $hexadecimal[$h];
                    $decimal[] = dechex($dec);
                }

                // invertendo os valores decimais(tabela ascii)
                $decimal = array_reverse($decimal);

                // convertendo os valores de tabela ascii para a string
                for ($j=0; $j<count($decimal);$j++){
                    $valor = $decimal[$j]-5;
                    $descripto[] = chr($valor);
                }  

                // juntando os valores da array para retornar uma string
                return implode($descripto);

            }

            $chave = criptarMensagem($texto);
            echo 'Mensagem criptografada: '.implode($chave).'<hr>';
            echo 'Mensagem descriptografada: '.descriptarMensagem($chave);

        ?>

    </body>
</html>