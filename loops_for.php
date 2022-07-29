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
        /* Estrutura de repetição While: 
            while(condição){

            }
        
        Estrutura de repetição Do While:
            $num = 1;
            $cont = 1;  
            echo "----Tabuada do $num-----";
            do{
                echo "<br>$num x $cont = ".($num*$cont);
                $cont++;
            }while($cont <= 10);
            echo '<br>----Fim da Tabuada---';
        

        Convertendo essa lógica para o for 

         Estrutura de repetição for:
            for(variavel; condição; incremento){

            }
        OBS: o primeiro parâmetro é executado somente uma única vez!,
        Após a finalização do laço é quando ocorre o incremento passado no parâmetro,
        Assim como o While se a condição informado for FALSE o laço não executará.
        */
        $num = 1;
        echo "----Tabuada do $num-----";
        for($cont = 1; $cont<=10; $cont++){
            echo "<br>$num x $cont = ".($num*$cont);
        }
        echo '<br>----Fim da Tabuada---';


        

    ?>
</body>
</html>