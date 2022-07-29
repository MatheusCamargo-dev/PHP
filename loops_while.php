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
        // Estrutura de repetição While
        // while (condição){}

        $num = 0;
        echo '----Inicio do loop-------';
        while($num <= 10){
            $num++; // critério de parada 
            if ($num == 1 || $num == 9){
                continue;   
                // continue volta ao inicio do laço, desconsiderando os códigos adiantes
                // quando um critério de parada principal está abaixo de continue, pode ocorrer loops não intencionais
            }
            if ($num > 10){
                break; // break é um critério de parada
            }
            echo '<br>'.$num;   


        }

        echo '<br>----Fim do loop-------';

    ?>
</body>
</html>