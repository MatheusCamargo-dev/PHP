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
        
        $itens = [
            'sofá',
            'mesa',
            'cadeira',
            'churrasqueira',
            'geladeira',
        ];
        
        echo '<pre>';
        print_r ($itens);
        echo '</pre>';
        echo '<hr>';

        // For each é uma estrutura de repetição para arrays e objetos
        // a variavel de valores irá armazenar os valores obtidos no array 
        // foreach($array as $variavel_de_valores){}
        foreach($itens as $item){
            echo "$item";
            if ($item == 'churrasqueira'){
                echo ', tá pegando fogo bicho';
            }
            echo "<br>";
        }


    ?>
</body>
</html>