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
            '1' => 'banana',
            '2' => 'maçã',
            '3' =>'morango',
            '4' => 'uva'];
        
        echo '<pre>';
        print_r ($lista_frutas);
        echo '</pre> <hr>';
        
        // Métodos de pesquisa de arrays
        $fruta = 'banana';
        // in_array('pesquisa','array da pesquisa') retorna true ou false para o que está sendo procurado
        // true -> texto = 1;
        // false -> texto = empty;
        if (in_array(strtolower($fruta),$lista_frutas)){
            echo 'Sim, temos essa fruta que você está procurando';
        }
        else{
            echo 'Não, não temos essa fruta que você está procurando';
        }

        echo '<hr>';
        
        // array_search('item da pesquisa', 'array da pesquisa') -> retorna o indice do valor pesquisado
        // caso não encontrado retorna null
        // NOTA: Em arrays sequências o primeiro indice no search retorna 0, passando a ser interpretado como FALSE
        if (array_search('banana',$lista_frutas)){
            echo 'Sim, temos essa fruta que você está procurando';
        }
        else{
            echo 'Não, não temos essa fruta que você está procurando';
        }
        echo '<hr>';
        // Pesquisando em arrays multidimensionais

        $lista_bebidas = [
            'a' => 'suco de laranja',
            'b' => 'refrigerante',
            'c' => 'café'];
        // array multidimensional
        
        // adicionando arrays básicos dentro de um array multidimensional
        $lista_alimentos = [
            'bebidas' => $lista_bebidas,
            'frutas' => $lista_frutas
            ];
        // utilizando in_array 
        if (in_array('refrigerante',$lista_alimentos['bebidas'])){
            echo 'Sim, temos esse item que você está procurando';
        }
        else{
            echo 'Não, não temos esse item que você está procurando';
        }
        echo '<br>';

        if (array_search('suco de laranja',$lista_alimentos['bebidas'])){
            echo 'Sim, temos esse item que você está procurando';
        }
        else{
            echo 'Não, não temos esse item que você está procurando';
        }
    ?>
</body>
</html>