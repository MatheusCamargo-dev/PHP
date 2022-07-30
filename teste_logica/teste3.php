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
        3 – Escreva um código que quebre uma string qualquer em pedaços de tamanho fixo de 50 caracteres e imprima cada um destes pedaços em uma linha. 
        */

        $texto = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi, ducimus similique. Veritatis, esse quas deleniti ipsum impedit corrupti explicabo voluptatum vel, voluptatem consequuntur temporibus quaerat nihil dignissimos. Corporis, qui quis!"; //variavel contendo o texto
        $x = 0; //variavel que vai funcionar como critério de parada e pesquisa do elemento $texto
        define ('y', 50); //constante que vai limitar a quantidade de caracteres que vai ser exibido
        do{
            // a partir da função substr($texto,<posição inicial>,<quantidade de caracteres>)
            // é possivel retornar parte de uma string com base nos parâmetros de posição inicial e quantidade de caracteres
            echo substr($texto, $x, y).'<br>';
            // echo strlen(substr($texto, $x, y));
            echo '<hr>';
            $x += 50;
            // a função strlen() retorna a quantidade de caracteres do parâmetro informado
        }while($x < (strlen($texto)));
       


    ?>
</body>
</html>