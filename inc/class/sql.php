<?php

    class Sql extends PDO {

        public function __construct(){

            try {

                $conn = new PDO("mysql: host=localhost:3306, dbname=db01", "root", "");
                echo "Conexão com o Banco de Dados feita com Sucesso!";

            } catch (PDOexception $pe) {

                die("Não foi possível fazer a conexão com o Banco de Dados!: \n" .$pe->getMessage());
                
            }

            return $conn;

        }

        public function query($rawQuery){

            $stmt = $this->conn->query($rawQuery);

            $stmt->execute();

            return $stmt->fetchALL(\PDO::FETCH_ASSOC);
    
        }

        public function select($rawQuery){

            $stmt = $this->conn->select($rawQuery);

            $stmt->execute();

            return $stmt->fetchALL(\PDO::FETCH_ASSOC);
    
        }

    }

?>