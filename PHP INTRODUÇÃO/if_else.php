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
        // ==
        echo '2 int é igual a 2 String: ';
        if (2 == '2'){
            echo 'True';
        }
        else{
            echo 'false';
        }
        echo '<br> 2 int é idêntico a 2 String: ';
        // ===
        if(2 === '2'){
            echo 'True';
        }
        else{
            echo 'false';
        }

        echo '<br><br>';
        // diferente !=
        // !=
        echo '2 int é diferente de 2 String: ';
        if (2 != '2'){
            echo 'True';
        }
        else{
            echo 'false';
        }
        echo '<br> 2 int é não idêntico a 2 String: ';
        // !==
        if(2 !== '2'){
            echo 'True';
        }
        else{
            echo 'false';
        }
        // (menor) < e (maior) >
        // (maior e igual) >= e (menor e igual) <=
        
    ?>
</body>
</html>