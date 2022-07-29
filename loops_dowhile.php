<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <style>
        body{
            background-color: black;
            color: white;
            font-size: 2em;
            display:flex;
            flex-wrap: wrap;
        }
        .box{
            max-width: 15vw;
        }
    </style>
</head>
<body>
    <?php 
        // Estrutura de repetição do While
        // do{}while(condição);

        $x = 10;
        echo '----Inicio do loop-------';
        do{
            echo '<br>Tabuadas';
        }while($x<10);
        // Pela condição estar no final, mesmo ela sendo falsa o bloco será executado pelo menos 1 vez.

        while($x<10){
            echo '<br> while';
        }
        // Pela condição estar no começo e ela retornar false, o bloco não será executado nem uma única vez.
        echo '<br>----Fim do loop-------';
        echo '<hr>';
        $num = 1;
        $cont = 1;
        do{   
            echo '<div class="box">';
            echo "----Tabuada do $num-----";
            do{
                echo "<br>$num x $cont = ".($num*$cont);
                $cont++;
            }while($cont <= 10);
            echo '<br>----Fim da Tabuada---';
            echo '</div>';
            echo '<hr>';
            $cont = 1;
            $num+= 1;
        }while($num <= 10);

    ?>
</body>
</html>