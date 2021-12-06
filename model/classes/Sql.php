<?php

    class Sql extends PDO {

        private $con;

        public function __construct(){}

        public function conexao(){

            $this->con = new PDO("mysql: host=localhost; dbname=db01", "root", "");

        }

        public function puxarNoti($query, $tabela){

            $this->conexao();

            $stmt->con->prepare($query, $tabela);

            $stmt->execute();

        }

        public function puxarProd(){

            $this->con;

            $result_dados = "SELECT * FROM tb_produtos";
            
            $stmte->con->prepare($result_dados);

            $stmte->execute();

        }

    }

  
?>