<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <style>
        body{
            background-color: black;
            color: white;
            font-size: 1.3em;
        }
        h1{
            margin:0;
        }
        p{
            margin:0;
        }
    </style>
</head>
<body>
    <?php 
        // Praticando percorrendo Arrays com loops
        $registros = [
            0 => [
            'titulo' => 'Titulo notícia 1',
            'conteudo' => 'conteudo notícia 1',
            ],
            1 => [
            'titulo' => 'Titulo notícia 2',
            'conteudo' => 'conteudo notícia 2',
            ],
            2 => [
                'titulo' => 'Titulo notícia 3',
                'conteudo' => 'conteudo notícia 3',
            ],
            3 => [
                'titulo' => 'Titulo notícia 4',
                'conteudo' => 'conteudo notícia 4',
            ],
            4 => [
                'titulo' => 'Titulo notícia 5',
                'conteudo' => 'conteudo notícia 5',
            ],
        ];
        
        echo '<pre>';
        print_r ($registros);
        echo '</pre>';
        echo '<hr>';
        $cont = 0;

        // Utilizando loop while
        echo '<h2>Utilizando loop while</h2>';
        while ($cont < count($registros)){
            echo '<h1>'.$registros[$cont]['titulo'].'</h1><br>';
            echo '<p>'.$registros[$cont]['conteudo'].'</p><br>';
            $cont++;
        }
        $cont = 0;
        echo '<hr>';

        // // Utilizando loop do while
        echo '<h2>Utilizando loop do while</h2>';
        do {
            echo '<h1>'.$registros[$cont]['titulo'].'</h1><br>';
            echo '<p>'.$registros[$cont]['conteudo'].'</p><br>';
            $cont++;
        }while($cont < count($registros));
        
        echo '<hr>';

        // Utilizando loop for
        echo '<h2>Utilizando loop for</h2>';
        for ($cont = 0;$cont<count($registros);$cont++) {
            echo '<h1>'.$registros[$cont]['titulo'].'</h1><br>';
            echo '<p>'.$registros[$cont]['conteudo'].'</p><br>';
        }
        echo '<hr>';

    ?>
</body>
</html>