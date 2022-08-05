<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <style>
        body{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <?php 
        /*Criar uma aplicação simples para identificar se uma pessoa pode doar sangue ou não
         Ter entre 16 e 69 anos
         Pesar no mínimo 50kg.
        
        */
        $idade = 18;
        $peso = 65;
        $nome = 'Matheus';
        if (($idade >= 16 && $idade <= 69) && $peso >= 50){
            echo("$nome, você está APTO a doar sangue");
        }
        else{
            echo("$nome, você NÃO está APTO a doar sangue");
        }
    ?>
</body>
</html>