<?php

    namespace classes;

    class Usuario extends Sql {

        private $cadastro;
        private $dados;
        private $login;

        public function cadastrar(){

            $this->dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            $this->conexao();
            if(!empty($dados['nome'])){
                $this->cadastro = "INSERT INTO usuarios (usuario, senha, email) VALUES (:nome, :senha, :email)";
                $stmt = $this->con->prepare($cadastro);
                $stmt->bindParam(":nome", $dados['nome']);
                $stmt->bindParam(":senha", $dados['senha']);
                $stmt->bindParam(":email", $dados['email']);
                $stmt->execute();
                    
                if($stmt->rowCount()) {
                    echo "Usuário cadastrado com sucesso!<br>";
                } else {
                    echo "Erro! Usuário não cadastrado com sucesso!<br>";
                }
                
            } 

        }

        public function logar(){

            $this->dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            $this->conexao();
            if(!empty($dados['SendLogin'])){
                $this->login = "SELECT id, usuario, senha, email FROM usuarios WHERE :nome, :senha, :email)";
                $stmt = $this->con->prepare($login);
                $stmt->bindParam(":nome", $dados['nomelog']);
                $stmt->bindParam(":senha", $dados['senhalog']);
                $stmt->bindParam(":email", $dados['emaillog']);
                $stmt->execute();

                if($stmt = 0) {
                echo "Erro: Nome, Email ou senha INVALIDO!";
                }
            }  

        }

    }

?>