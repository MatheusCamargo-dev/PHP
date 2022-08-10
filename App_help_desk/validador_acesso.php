<?php
    session_start();
    if ($_SESSION['autenticado']){
    }
    else{
        header('Location: index.php?login=erro2');
    }
?>