<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="home.php">
     <img src="./img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
     App Help Desk
    </a>
    <?php 
        if(isset($_SESSION['id'])){
            echo $_SESSION['perfil'];
        }
    ?>
    <?php if(isset($_SESSION['autenticado']) && $_SESSION['autenticado'] == true){?>
        <a class="navbar-brand" href="logoff.php">
        <img src="./img/logoff.png" width="30" height="30" class="d-inline-block align-right" alt="">
        Sair
        </a>
    <?php
    }?>
</nav>