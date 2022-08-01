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
            Usando a função rand(1,9), escreva um script que sorteie 9 números e coloque-os numa matriz (array bidimensional) 3 x 3, levando em consideração que os números não poderão ser repetidos e seus vizinhos dentro do array de cada linha não poderão ser números vizinhos reais. Ex [6,4,5], onde o 4 e o 5 são vizinhos diretos.

            */
            //   Criar uma array 3x3
            $bi_array = [
                0 => [],
                1 => [],
                2 => []
            ];

            $cont = 0; // contador
            $elementos_da_array = []; //array que vai armazenar os elementos de todas as arrays

            //função para verificar todos os critérios e retornar se é invalido
            function verificarCriterios($array,$random,$cont) {
                $invalido = false;
                foreach($array as $indice => $elemento_array){    
                    if(($elemento_array == $random+1) || ($elemento_array == $random-1)){
                        if(($indice == $cont-1 || $indice == $cont+1)){
                            $invalido = true;
                        }
                    }
                }
                return $invalido;
            }

            for($i=0;$i<3;$i++){ //laço de repetição que vai mudando o indice da matriz para a incrementação dos valores
                while($cont < 3){ //laço que vai se repetir 3x para geração dos valores de incrementação do indice [i] da matriz
                    
                    $random = mt_rand(1,9); //gerando número aleatório de 1 a 9.

                    if (in_array($random,$elementos_da_array)){
                        while(in_array($random,$elementos_da_array)){ 
                            //Gera um número aleatório que não esteja nos elementos da array
                            $random = mt_rand(1,9); 
                        }
                    }

                    
                    if(empty($bi_array[$i])){
                        // array de indice $i estiver vazio então push random
                        array_push($bi_array[$i],$random);
                        array_push($elementos_da_array,$random);
                        $cont++;
                    }
                    else{
                        $invalido = verificarCriterios($bi_array[$i],$random,$cont);
                        if (!$invalido){ 
                            // se o número $random for valido push
                            array_push($bi_array[$i],$random);
                            $elementos_da_array[] = $random;
                            $cont++;
                        }
                        // else if para garantir que caso o ultimo elemento do ultimo indice da array seja invalido,
                        // reiniciar a array para não cair em um loop
                        else if(count($elementos_da_array) == 8){
                            // se for invalido e for o último elemento
                            echo 'Reiniciar <br>';
                           $bi_array = [
                                0 => [],
                                1 => [],
                                2 => []
                            ];
                            $cont=0;
                            $i = 0;
                            $elementos_da_array = [];
                        }
                    }
                                      
                }
                $cont=0;
            }
            
            echo '<pre>';
            print_r ($bi_array);
            echo '<pre><hr>';

            echo '<pre>';
            print_r ($elementos_da_array);
            echo '<pre>';
        ?>
    </body>
</html>