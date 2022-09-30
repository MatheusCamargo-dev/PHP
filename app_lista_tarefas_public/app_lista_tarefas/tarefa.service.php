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
            $query = "SELECT 
             t.id, s.status, t.tarefa 
            FROM 
             tb_tarefas as t
            left join
             tb_status as s on (t.id_status = s.id)
             ";
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);

        }

        public function atualizar(){
            $query = 'UPDATE tb_tarefas set tarefa = ? where id = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->tarefa->__get('tarefa'));
            $stmt->bindValue(2, $this->tarefa->__get('id'));
            return $stmt->execute();
        }

        public function marcarRealizado(){
            $query = 'UPDATE tb_tarefas set id_status = ? where id = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->tarefa->__get('id_status'));
            $stmt->bindValue(2, $this->tarefa->__get('id'));
            return $stmt->execute();
        }

        public function remover(){
            $query = 'DELETE FROM tb_tarefas where id = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->tarefa->__get('id'));
            return $stmt->execute();
        }

        public function recuperarTarefasPendentes(){
            $query = "SELECT 
             t.id, s.status, t.tarefa 
            FROM 
             tb_tarefas as t
            left join
             tb_status as s on (t.id_status = s.id)
            where
             t.id_status = ?
            ";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->tarefa->__get('id_status'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

    }
?>