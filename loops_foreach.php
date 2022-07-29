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
        $items = [
            'sofá',
            'mesa',
            'cadeira',
            'fogão',
            'geladeira',
        ];
        
        echo '<pre>';
        print_r ($items);
        echo '</pre>';
        echo '<hr>';

    ?>
</body>
</html>