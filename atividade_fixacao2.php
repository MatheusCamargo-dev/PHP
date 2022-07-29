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
        /*
         Atividade: "crie um array capaz de produzir, através de um laço de repetição, um array com 6 elementos númericos aleatórios entre 1 e 60, simulando um sorteio da megasena.
         OBS: os números aleatórios contídos dentro do array não podem repetir.
         
         Minha lógica sem utilizar métodos de pesquisa:
         etapa 1: gerar um valor random
         etapa 2: verificar se o valor gerado é igual aos valores anteriores
         etapa 3: se o valor verificado for diferentes dos valores anteriores então receber o valor novo
         se não, gerar valores até gerar um valor diferente.

         $sorteio = []; 
         $random;  
         $sorteio[0] = rand(1,60);
         for($cont=0;$cont<6;$cont++){
            $random = rand(1,60);
            foreach($sorteio as $resultado){
                if ($resultado != $random){
                    $sorteio[$cont] = $random;
                }
                else{
                    while($random == $resultado){
                        $random = rand(1,60);
                    }
                    $sorteio[$cont] = $random;
                }
             }
         }   
        */
        
        // código otimizado com método de pesquisa
        $sorteio = [];
        $random;
        while(count($sorteio) <= 5){ //enquanto sorteio não tiver 5 indices repita
            $random = rand(1,60);
            if (!in_array($random,$sorteio)){ 
            //se não encontrar random em sorteio então sorteio recebe random
                $sorteio[] = $random;
            }
        }

        echo 'Resultado mega sena: ';
        foreach($sorteio as $indice => $resultado_sorteio){
            echo $resultado_sorteio;
            if ($indice != 5){
                echo "-";
            }
        }
        

    ?>
</body>
</html>