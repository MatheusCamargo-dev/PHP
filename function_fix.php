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
        /* 1) Crie uma função para calcular o imposto de renda a ser pago com base em um salário passado por parâmetro. 
            Para calcular o valor do imposto a ser pago, considere a seguinte tabela abaixo: 
            BASE DE CÁLCULO     ALIQUOTA 
            Até 1.903,98    ------------------ isento  
            De R$ 1.903,99 até R$ 2.826,65     -------------- 7,5%
            De R$ 2.826,66 até R$ 3.751,05  ------------ 15% 
            De R$ 3.751,06 até 4.664,68 --------------- 22,5% 
            Acima de R$ 4664,68    -----------     27,5% 
            
        */

        function calcularImposto($salario){
            if ($salario <= 1903.98 ){
                $imposto = $salario*0;
            }
            else if ($salario <= 2826.65){
                $imposto = ($salario*7.5)/100;
            }
            else if ($salario <= 3751.05){
                $imposto = ($salario*15)/100;
            }
            else if ($salario <= 4664.68){
                $imposto = ($salario*22.5)/100;
            }
            else if ($salario > 4664.68){
                $imposto = ($salario*27.5)/100;
            }
            return $imposto;
        }

        echo 'Valor do imposto: '.calcularImposto(1000).'<br>';
        echo 'Valor do imposto: '.calcularImposto(2000).'<br>';
        echo 'Valor do imposto: '.calcularImposto(3000).'<br>';
        echo 'Valor do imposto: '.calcularImposto(4000).'<br>';
        echo 'Valor do imposto: '.calcularImposto(5000).'<br>';
        echo 'Valor do imposto: '.calcularImposto(6000).'<br>';
    ?>
</body>
</html>