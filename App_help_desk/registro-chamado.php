<?php
    session_start();

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);
    $cliente = str_replace('#','-', $_POST['cliente']);

    $texto = $_SESSION['id'].'#'.$titulo.'#'.$cliente.'#'.$categoria. '#'.$descricao. PHP_EOL;

    // https://www.php.net/manual/pt_BR/function.fopen.php
    $registro = fopen('registro.txt', 'a');
    fwrite($registro,$texto);
    fclose($registro);
    header('Location: abrir_chamado.php?enviado=sucesso');
?>