<?php
    class TarefaService{

        private $conexao;
        private $tarefa;

        public function TarefaService(Conexao $conexao, Tarefa $tarefa) {
            $this->conexao = $conexao->conectar();
            $this->tarefa = $tarefa;
        }

        // Métodos CRUD
        public function inserir(){
            $query = 'INSERT INTO tb_tarefas (tarefa) values(:tarefa)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
            $stmt->execute();
        }

        public function recuperar(){

        }

        public function atualizar(){

        }

        public function remover(){

        }

    }
?>