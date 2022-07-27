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
        // comando switch
        define('parametro', 1);
        switch (parametro){
            case 0:
                echo ('caso 0');
                break;
            case null:
                echo ('case null');
                break;
            case 1:
                echo (' caso 1');
                break;
            case 2:
                echo (' caso 2');
                break;
            case 3:
                echo (' caso 3');
                break;
            case 'abc':
                echo (' case 4');
                break;
            case true:
                echo (' case 5 true');
                break;
            case false:
                echo (' case 6 false');
                break;
            default:
                echo (' caso default');
                break;
        }
    ?>
</body>
</html>