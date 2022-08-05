<?php
    // usuarios do sistema (sem banco de dados)
    $usuarios_app = [
        array('email' => 'teste@teste.com', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
    ];

    echo '<pre>';
    print_r ($usuarios_app);
    echo '</pre>';

    print_r ($_POST);
    echo '<br>';

    echo $_POST['email'];
    echo '<br>';
    echo $_POST['senha'];

    
?>