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
        // function nomeDaFuncao(paramêtro){}

        //function sem retorno (void)
        function exibirBoasVindas(){
            echo 'Hello world';
        }

        //function com retorno (return)
        function calcularAreaTerreno($largura,$comprimento){
            $area = $largura * $comprimento;
            return $area;
        }

        exibirBoasVindas();
        echo '<br> Área: ';
        print calcularAreaTerreno(10,2);
    ?>
</body>
</html>