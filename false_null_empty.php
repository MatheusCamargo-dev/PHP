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
        // false (true/false) - tipo variavel boolean 
        // null e empty - valores especiais
        // null pode ser considerado empty, mas empty não pode ser considerado null

        $teste_null = null;
        $teste_empty = '';
        $teste_false = false;

        // valores null
        if (is_null($teste_null)){
            echo "Sim, a variável teste_null é null";
        }
        else{
            echo "Não, a variável teste_null não é null";
        }
        echo '<br>';
        if (is_null($teste_empty)){
            echo "Sim, a variável teste_empty é null";
        }
        else{
            echo "Não, a variável teste_empty não é null";
        }
        echo '<hr>';

        // valores empty
        if (empty($teste_null)){
            echo "Sim, a variável teste_null é vazia";
        }
        else{
            echo "Não, a variável teste_null não é vazia";
        }
        echo '<br>';
        if (empty($teste_empty)){
            echo "Sim, a variável teste_empty é vazia";
        }
        else{
            echo "Não, a variável teste_empty não é  vazia";
        }

        echo '<hr>';
        if (is_null($teste_false)){
            echo "Sim, a variável teste_false é null";
        }
        else{
            echo "Não, a variável teste_false não é null";
        }
        echo '<br>';
        if (empty($teste_false)){
            echo "Sim, a variável teste_false é vazia";
        }
        else{
            echo "Não, a variável teste_false não é  vazia";
        }
    ?>
</body>
</html>