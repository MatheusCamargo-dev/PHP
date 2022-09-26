<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOB</title>
    <style>
        body{
            background-color: darkslategray;
            font-size: 6em;
            color: white;
            text-align: center;
            padding-top: 10vh;
        }
    </style>
</head>
<body>
    <?php
        class Calculadora{
            public $operador = 'soma';

            public function calcular($a,$b){
                if($this->operador == 'soma'){
                    return $a + $b;
                }
                return false;
            }

        }
        $calculadora = new Calculadora();
        echo $calculadora->calcular(10,60);
    ?>
</body>
</html>