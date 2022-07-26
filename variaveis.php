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
        // string
        $nome = 'Matheus R. Camargo';
        // int
        $idade = 18;
        // float
        $peso = 62.5;
        // boolean
        $programador = true; 
        // true = 1 ou false = null

        // ...lógica //
        $idade = '30';
        
    ?>
    <h1>Olá</h1>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Programador: <?= $programador ?></p>  
    
</body>
</html>