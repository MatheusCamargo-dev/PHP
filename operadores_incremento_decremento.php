<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <style>
        body{
            background-color: black;
            color: white;
            font-size: 2em;
        }
    </style>
</head>
<body>
    <?php 
        // incremento e decremento
        // Pré incremento ++$variavel
        // Pós incremento $variavel++
        // Pré decremento --$variavel
        // Pós decremento $variavel--
        $variavel = 0;
        while($variavel < 5){
            echo ($variavel).'<br>';
            $variavel++;
        }

        echo '<br>';

        $variavel = 0;
        while($variavel < 5){
            ++$variavel;
            echo ($variavel).'<br>';
        }

        echo '<br>';

        $variavel = 5;
        while($variavel > 0){
            echo ($variavel).'<br>';
            $variavel--;
        }

        echo '<br>';

        $variavel = 5;
        while($variavel > 0){
            --$variavel;
            echo ($variavel).'<br>';
        }
    ?>
</body>
</html>