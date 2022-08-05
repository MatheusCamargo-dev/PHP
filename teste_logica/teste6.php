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
        .par{
            background-color: black;
            border-radius: 1;
            border-style: groove;
            padding: 1vw;
        }
        .impar{
            background-color: white;
            border-radius: 1;
            border-style: groove;
            padding: 1vw;

        }
        .table_style{
            background-color: white;
            border-color: white;
            border-radius: 1;
            border-style: groove;
            font-size: 1.5em;
            margin-top:1%;
            margin-bottom: 2%;
        }
    </style>
</head>
    <body>
        <?php 

            /* 
            Usando a função rand(1,100), escreva novamente um script que sorteie 100 números. Dessa vez, ao invés de armazenar os números você deve distribui-los em uma tabela HTML com 10 linhas e 10 colunas. As celulas com números pares devem ter a cor preta, e as com números impares devem ser brancas.  
            */

            $random; // variavel pra armazenar números random
            $td = 0; // contador de colunas 
            
            echo '<table class="table_style">';
            for($cont=0;$cont < 100;$cont++){
                // a cada 10 colunas criar uma linha
                if ($td == 0 ){
                    echo '<tr>';
                }
                $random = rand(1,100); //random recebe um valor aleatório entre 1 e 100
                if ($random%2==0){ // Se o resto de divisão por 2 de random for 0 então o número é par logo $pares recebe $random
                    echo "<td class='par'> $random </td>";
                }
                else{ // Se não o número é impar logo $impares recebe random
                    echo "<td class='impar'> $random </td>";
                }
                ++$td;
                // se a quantidade de colunas for 10 então fechar a linha
                if ($td == 10 ){
                    echo '</tr>';
                    $td = 0; //zerando o contador de colunas quando chega em 10
                }
            }
            echo '</table>';
        ?>

    </body>
</html>