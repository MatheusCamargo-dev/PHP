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

        /* 
        Quanto tempo o script abaixo demora para executar? 
        */
        
        echo "INICIO"; 
        // && operador lógico
        for ($a = 0; $a > 0 && $a < 100; $a++) { 
         sleep(1); 
        } 
        echo "FIM"; 


        // https://www.php.net/manual/en/function.sleep.php#refsect1-function.sleep-description
        // o script acima não demora nenhum segundo, pois o laço for não é executado,
        // pois a condição informada retorna false por tanto o laço sleep não é executado.

        // caso a condição fosse true o script iria demorar o número informado pela condição < (menor que)
        // Neste exemplo seria 100s
       


    ?>
</body>
</html>