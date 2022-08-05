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
        // operadores lógicos

        // Operador lógico && ou AND
        // E: retorna verdadeiro SOMENTE se toda a expressão for TRUE
        echo '2 int é igual a 2 String && 3 int é igual a 3 String: ';
        if (2 == '2' && 3 == '3'){
            echo 'True';
        }
        else{
            echo 'false';
        }
        echo '<br> 2 int é igual a 2 String AND 3 int é igual a 3 String: ';
        if (2 == '2' AND 3 == '3'){
            echo 'True';
        }
        else{
            echo 'false';
        }
        echo '<br><br>';
        // Operador lógico OR ou ||
        // OU: retorna verdadeiro se ALGUMA das expressões retornar verdadeiro;
        echo '2 int é igual a 2 String OR 3 int é igual a 3 String: ';
        if(2 == '2' OR 3 == '3'){
            echo 'True';
        }
        else{
            echo 'false';
        }
        echo '<br> 2 int é idêntico a 2 String || 3 int é idêntico a 3 String: ';
        if(2 === '2' || 3 === '3'){
            echo 'True';
        }
        else{
            echo 'false';
        }
 
        echo '<br><br>';

        // Operador lógico XOR, 
        // só retorna TRUE se SOMENTE uma das expressões forem verdadeiras
        // caso contrário irá retornar FALSO
        echo '2 int é igual a 2 String XOR 3 int é igual a 3 String: ';
        if(2 == '2' XOR 3 == '3'){
            echo 'True';
        }
        else{
            echo 'false';
        }
        // Operador lógico !, inverte o resultado da(s) expressão.
        echo '<br> Invertendo; 2 é igual a 2 String: ';
        // !==
        if(!(2 == '2')){
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