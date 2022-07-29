<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <style>
        body{
            background-color: black;
            color: white;
            font-size: 1.3em;
        }
        h1{
            margin:0;
        }
        p{
            margin:0;
        }
    </style
</head>
<body>
    <?php 
        // Praticando percorrendo Arrays com loops

        $funcionarios_rh = [
            0 => ['nome' => 'Matheus','salario' => 2000, 'sexo' => 'masculino'],
            1 => ['nome' => 'João','salario' => 2100],
            2 => ['nome' => 'Maria','salario' => 2500],
        ];

        $funcionario_dev = [
            0 => ['nome' => 'Amanda','salario' => 3800],
            1 => ['nome' => 'Pedro','salario' => 3100],
            2 => ['nome' => 'Guilherme','salario' => 3000],
        ];

        echo '<pre>';
        print_r ($funcionarios_rh);
        echo '</pre>';   

        $empresa_funcionarios = [
            'RH' => $funcionarios_rh,
            'Desenvolvedores' => $funcionario_dev
        ];

        // utilizando o token '=>' é possivel armazenar o indice separado do conteúdo
        // é possivel encadear o foreach
        foreach($empresa_funcionarios as $setor => $setores){
            foreach($setores as $cargo => $funcionarios){
                foreach($funcionarios as $indice => $valores){
                    echo "$indice: $valores <br>";
                }
            echo '<hr>';
            }
        }        

    ?>
</body>
</html>