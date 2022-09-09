<?php
    class Conexao {

        private $DB_HOST = 'localhost';
        private $DB_NAME = 'php_com_db';
        private $DB_USER = 'root';
        private $DB_PASSWORD = '';

        public function conectar(){
            try{
                $conexao = new PDO(
                    "mysql:host=$this->DB_HOST;dbname=$this->DB_NAME",
                    "$this->DB_USER",
                    "$this->DB_PASSWORD",

                );
            } catch(PDOException $e){
                echo '<p>'. $e->getMessage().'</p>';
            }
        }
    }
?>