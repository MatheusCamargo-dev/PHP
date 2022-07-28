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
        // arrays multidimensionais englobam(encadear) outros arrays

        //arrays básicos
        $lista_bebidas = [
            'a' => 'suco de laranja',
            'b' => 'refrigerante',
            'c' => 'café'];
        $lista_frutas = [
            'Banana',
            'Maçã',
            'Morango',
            'Uva'];
        
        // array multidimensional
        $lista_alimentos = [];
        
        // adicionando arrays básicos dentro de um array multidimensional
        $lista_alimentos['bebidas'] = $lista_bebidas;
        $lista_alimentos['frutas'] = $lista_frutas;
        echo '<pre>';
        print_r ($lista_alimentos);
        echo '</pre>';
        
        echo '<hr>';

        // criando arrays dentro de uma array multidimensional
        $cardapio['bebidas'] = [
            'A.' => 'Refrigerante',
            'B.' => 'Suco de laranja',
            'C.' => 'Água',
            'D.' => 'Cerveja',
        ];
        $cardapio['comidas'] = [
            '1.' => 'Xis',
            '2.' => 'Pizza',
            '3.' => 'Hambúrguer',
            '4.' => 'Batata frita',
            '5.' => 'Picadão'
        ];
        
        echo '<pre>';
        print_r ($cardapio);
        echo '</pre> <hr>';

        // gerando uma array multidimensional que engloba arrays multidimensionais
        /*
        $multidimensional = []; 
        $multidimensional['cardapio do restaurante'] = $cardapio;
        $multidimensional['fruteira'] = $lista_alimentos;
        
        Simplificando: */
        $multidimensional = [
            'cardapio do restaurante' => $cardapio,
            'fruteira' => $lista_alimentos
        ];

        echo '<pre>';
        print_r ($multidimensional);
        echo '</pre> <hr>';

        // consultando items especificos de uma array multidimensional
        echo 'Eu gostaria de comer '.$multidimensional['cardapio do restaurante']['comidas']['4.'];
        echo '<br>';
        echo 'Eu gostaria de beber '.$cardapio['bebidas']['B.'];


        
    ?>
</body>
</html>