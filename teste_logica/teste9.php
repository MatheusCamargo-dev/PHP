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
            //   1° Criar uma array 3x3
            $bi_array = [
                0 => [],
                1 => [],
                2 => []
            ];

            $cont = 0;
            $elementos_da_array = []; //array que vai armazenar os elementos de todas as arrays

            for($i=0;$i<3;$i++){ //laço de repetição que vai mudando o indice da matriz para a incrementação dos valores
                while($cont < 3){ //laço que vai se repetir 3x para geração dos valores de incrementação do indice [i] da matriz
                    $random = mt_rand(1,9); //gerando número aleatório de 1 a 9.

                    foreach($bi_array as $indices => $vetores){ 
                    //foreach para encontrar os elementos da matriz bi dimensional e armazenar em outra array.
                        foreach($vetores as $elemento){
                            if (!in_array($elemento, $elementos_da_array)){ 
                                //se não houver o elemento da matriz bi dimensional dentro da array elementos_da_array[]
                                // então $elementos_da_array recebe o elemento
                                $elementos_da_array[] = $elemento;
                            }
                        }
                    }

                    // se o número aleatório gerado já existe nos elementos da array
                    // então gerar até encontrar um diferente
                    if (in_array($random,$elementos_da_array)){
                        while(in_array($random,$elementos_da_array)){
                            $random = mt_rand(1,9);
                        }
                    }

                    if ( (!in_array($random+1, $bi_array[$i])) && (!in_array($random-1, $bi_array[$i])) ){
                        array_push($bi_array[$i],$random);
                        $cont++;
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