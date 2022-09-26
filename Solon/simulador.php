<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador</title>
    <style>
        body{
            display:flex;
            flex-direction: center;
            justify-content: center;
            background-color: black;
        }
        #form-style{
            margin: 1vh;
            min-height: 50vh;
            min-width: 30vw;
            background-color: var(--blue);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding:1vw;
            border-radius: 5px;
        }
        #box-forms{
            min-height: 50vh;
            width: 50vw;
            background-color: rgb(27, 121, 243);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 10vh;
            border-radius: 10px;
            border-style:double;
        }
        fieldset{
            min-width: 40vw;
            margin-top: 2vh;
        }
        
    </style>
</head>
<body>
    <div id="box-forms">
        <form action="dados.php" method="POST" id='form-style'>
            <fieldset>
                <legend>
                    Selecione o que deseja calcular 
                </legend>
                <div>
                    <input type="radio" name="valorCalcular" id="valorCalcularParcelas" required>
                    <label for="valorCalcularParcelas">Valor das parcelas</label>
                    <br>
                    <input type="radio" name="valorCalcular" id="valorCalcularEmprestimo" required>
                    <label for="valorCalcularEmprestimo">Valor do empréstimo</label>
                </div>
            </fieldset>
            <fieldset>
                <legend>
                    Preencha os campos abaixo
                </legend>
                <div>
                    <span>Valor creditado: </span>
                    <input type="text" name="valorCreditado" id="valorCreditado" placeholder='Digite um valor' required>
                    <br>
                    <span>Data de crédito </span>
                    <input type="date" name="valorDataCredito" id="valorDataCredito" required>
                    <br>
                    <span>Nº de parcelas</span>
                    <select name="" id="">
                    <?php for ($i=1; $i<=24;$i++){ ?>
                        <option value=""><?php print $i ?></option>
                    <?php } ?>
                    </select>
                </div>
            </fieldset>
            <input type="submit" name="submit" id="submit" onBlur="alert('Enviado com sucesso!')">
        </form>
    </div>
</body>
</html>
