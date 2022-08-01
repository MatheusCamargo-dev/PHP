<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <style>
        body{
            background-color: black;
            color: blue;
            font-size:2em;
        }
        
    </style>
</head>
    <body>
        <?php 

            /* 
           Suponha que você precise criar um aplicativo de entregas. Em seu aplicativo, as entregas realizadas em um raio de 2KM não são cobradas. As entregas realizadas a partir de 2KM até 15KM são cobradas 1,15 R$ por KM, e a partir de 15 KM existe um custo de entrega fixo de 17,50 R$. Escreva uma função que receba a distancia em KM e calcule o valor da entrega. 
            */

            // função que retorna o valor de entrega de acordo com o KM passado como paramêtro
            function valorDeEntrega($km){
                if ($km <= 2){
                    return 0;
                }
                else if($km <= 15){
                    return (1.15*$km);
                }
                else if($km > 15){
                    return 17.5;
                }
            }

            echo 'Valor de entrega: '.valorDeEntrega(1);
            echo '<br>Valor de entrega: '.valorDeEntrega(10);
            echo '<br>Valor de entrega: '.valorDeEntrega(16);

           
        ?>

    </body>
</html>