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
        // arrays sequências (númericos)
        // pode ser utilizando o objeto array ou []
        //$lista_frutas = array('Banana','Maçã','Morango','Uva');
        $lista_frutas = ['Banana','Maçã','Morango','Uva'];

        // criando novos indices dentro de um array
        $lista_frutas[] = 'Abacaxi';
        //debug para arrays var_dump() & print_r()
        echo '<pre>';
        var_dump($lista_frutas);
        echo '</pre>';

        echo '<hr>';

        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre>';

        echo '<hr>';
        // recuperando valores especificos do array
        echo 'Eu gosto de '.$lista_frutas[2];

        echo '<hr>';

        // arrays associativos, gera a chave de acesso e associa o valor nela a partir de =>
        $lista_bebidas = [
            'a' => 'suco de laranja',
            'b' => 'refrigerante',
            'c' => 'café'];
        // gerando novo indice associativo
        $lista_bebidas['d'] = 'drink';
        echo '<pre>';
        print_r($lista_bebidas);
        echo '</pre>';

        echo '<hr>Eu gosto de tomar '.$lista_bebidas['c'];
    ?>
</body>
</html>