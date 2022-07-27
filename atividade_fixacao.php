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
        /*Exercicio só oferecer desconto se o cliente possui um cartão da loja E o valor de compra seja superior a 100*/
        echo 'DESCONTO de 50% no frete se a compra for ACIMA de R$100 e POSSUIR o CARTÃO DA LOJA <br>';

        $usuario_possui_cartao_loja = false;
        $valor_compra = 225;
        $valor_frete = 200;
        //  <condição> ? true : false
        $resp = $usuario_possui_cartao_loja ? 'SIM' : 'NAO';
        /*
            if ($usuario_possui_cartao_loja){
                $resp = 'SIM';
            }
            else{
                $resp = 'NÃO';
            }
        */
        echo "Possui cartão: $resp <br> Valor de compra: $valor_compra <br>
        Valor de frete $valor_frete <br>";
        if($usuario_possui_cartao_loja == true && $valor_compra >= 100){
            $valor_frete -= ($valor_frete*50)/100;
            echo "Parabéns você recebeu um desconto de 50% seu frete custa: $valor_frete";
        }
        else{
            echo "Você não recebeu um desconto, seu valor de frete custa: $valor_frete";
        }

        $usuario_possui_cartao_loja = true;
        $valor_compra = 350;
        $valor_frete = 200;
        if ($usuario_possui_cartao_loja){
            $resp = 'SIM';
        }
        else{
            $resp = 'NÃO';
        }
        echo "<br><br>Possui cartão: $resp <br> Valor de compra: $valor_compra <br>
        Valor de frete $valor_frete <br>";
        $valor_frete -= $usuario_possui_cartao_loja && $valor_compra >= 300 ? ($valor_frete*90)/100 : ($usuario_possui_cartao_loja && $valor_compra >= 200 ? ($valor_frete*50)/100 : 0) ;
        /*
        if($usuario_possui_cartao_loja && $valor_compra >= 300){
            $valor_frete -= ($valor_frete*90)/100;
            echo "Parabéns você recebeu um desconto de 90% seu frete custa: $valor_frete";
        }
        else if($usuario_possui_cartao_loja && $valor_compra >= 200){
            $valor_frete -= ($valor_frete*50)/100;
            echo "Parabéns você recebeu um desconto de 50% seu frete custa: $valor_frete";
        }
        else{
            echo "Você não recebeu um desconto, seu valor de frete custa: $valor_frete";
        }
        */
        echo "Parabéns você recebeu um desconto seu frete custa: $valor_frete";
        
    ?>
</body>
</html>