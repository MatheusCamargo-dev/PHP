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
        $lista_frutas = [
            '1' => 'morango',
            '2' => 'maçã',
            '3' =>'banana',
            '4' => 'uva'
        ];

        $lista_bebidas = [
            'a' => 'suco de laranja',
            'b' => 'refrigerante',
            'c' => 'café'
        ];
       
        $lista_alimentos = [
            'bebidas' => $lista_bebidas,
            'frutas' => $lista_frutas
        ];

        echo '<pre>';
        print_r ($lista_alimentos);
        echo '</pre> <hr>';

        // Funções nativas para manipulações de Arrays 

        // is_array(array) -> Verifica se o parâmetro é uma array
        if (is_array($lista_alimentos)){
            echo 'Sim é um array ';
        }
        else{
            echo 'Não é um array ';            
        }
        echo '<hr>';

        // array_keys() -> RETORNA todas as chaves de um array
        echo '<pre>';
        print_r (array_keys($lista_bebidas));
        echo '</pre> <hr>';

        // sort(array) -> Ordena um array(por ordem alfabética) e reajusta seus indices.
        // Retornando true ou false
        sort($lista_bebidas);
        echo '<pre>';
        print_r ($lista_bebidas);
        echo '</pre> <hr>';

        // asort(array) -> Ordena um array preservando seus indices.
        asort($lista_frutas);
        echo '<pre>';
        print_r ($lista_frutas);
        echo '</pre> <hr>';

        echo ($lista_frutas[1]).'<hr>';

        // count(array) -> conta a quantidade de elementos de um array.
        echo '<pre>';
        echo 'Número de elementos do array: '.count($lista_frutas);
        echo '</pre> <hr>';

        // array_merge(array) -> Funde um ou mais arrays.
        $lista_comidas = array_merge($lista_frutas,$lista_bebidas);
        echo '<pre>';
        print_r ($lista_comidas);
        echo '</pre> <hr>';

        // explode(array) -> Retorna um Array dividindo uma string baseada em um demilitador informado
        $string = '29/07/2022';
        $array_dividido = explode('/',$string);
        echo '<pre>';
        print_r ($array_dividido);
        echo '</pre> <hr>';

        // implode(array) -> Junta os elementos de uma array retornando uma string
        echo '<pre>';
        echo (implode('-',$array_dividido));
        echo '</pre> <hr>';


    ?>
</body>
</html>