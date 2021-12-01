<?php

    class Sql extends PDO {

        private $con;

        public function __construct(){}

        public function conexao(){

            $this->con = new PDO("mysql: host=loscalhost; dbname=db01", "root", "");

            echo "Conexão Estabelecida com Sucesso!";

        }

        public function vincParms($stmt, $parametros = array()) { //Vincular Parâmetros

            foreach ($parametros as $key => $value) {
                $stmt->vincParm($key, $value);
            }

        }

        public function vincParm($stmt, $key, $value){  //Vincular Parâmetro
            $stmt->setParam($key, $value);
        }

        public function inserir($cmd, $parametros = array()) {  //Inserir dados

            $stmt = $this->con->prepare($cmd);

            $this->vincParms($cmd, $parametros);

            $stmt->execute();

            return $stmt;

        }

    }

    $sql = new Sql;

    $sql->conexao();

?>