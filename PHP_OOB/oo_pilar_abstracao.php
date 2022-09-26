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
        class Funcionario{

            public $nome = null;
            public $telefone = null;
            public $numeroFilhos = null;
            
            public function setNome($nome){
                $this->nome = $nome;
            }
            public function setTelefone($telefone){
                $this->telefone = $telefone;
            }
            public function setNumeroFilhos($numeroFilhos){
                $this->numeroFilhos = $numeroFilhos;
            }
            public function getNome(){
                return $this->nome;
            }
            public function getTelefone(){
                return $this->telefone;
            }
            public function getNumeroFilhos(){
                return $this->numeroFilhos;
            }

            public function resumirCadastroFunc(){
                return 'Meu nome é '.$this->getNome().
                '<br>Meu telefone é '.$this->getTelefone().
                '<br>Tenho '.$this->getNumeroFilhos().' filhos';
            }
            public function modicarNumeroFilhos(){

            }
        }

        $pessoa = new Funcionario();
        $pessoa->setNome('Julia');
        $pessoa->setTelefone('(51)997817499');
        $pessoa->setNumeroFilhos(100);

        echo $pessoa->resumirCadastroFunc();
    ?>
</body>
</html>