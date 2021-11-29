<?php

    class Sql extends PDO {

        public $conn = false;

        public function __construct(){
            $this->conn = $this->conecta();
        }

        public function conecta(){

            try {

                $con = new PDO("mysql: host=localhost:3306, dbname=db01", "root", "");
                echo "Conexão com o Banco de Dados feita com Sucesso!";
            } catch (PDOexception $pe) {

                die("Não foi possível fazer a conexão com o Banco de Dados!: \n" . $pe->getMessage());
            }

            return $con;
        
        }
        
        public function buscaItem($cmd, $parm=false) {

            if (!$parm) return "Erro";  // testa se parametro foi informado

            $parametro = $this->preparaParm($cmd, $parm);  // prepara parametro sanitizando

            $stmt = $this->conn->query($parametro); // Passa query(script) para o PDO

            $stmt->execute();   // Executa via PDO

            return $stmt->fetchALL(\PDO::FETCH_ASSOC);  // Retorna o resultado da query executada
    
        }

        public function inserir($cmd, $parms){

            $conn = $this->conecta();

            $parametros = $this->preparaParms($cmd, $parms);

            $stmt = $this->conn->query($parametros);

            $stmt = execute();

            return $stmt->fetchALL(\PDO::FETCH_ASSOC);

        }

        function preparaParm($cmd, $prm) {
            return  $this->conn->prepare($cmd, $prm); // Sanitiza parametro com PDO
        }


        function preparaParms($cmd, $prms) {

            if (!is_array($prms)) return "Erro";

            foreach ($prms as $key => $value) {
                $cmd->bindParam($cmd, $key, $value);
            }

            return  true;
        }

        
    }

    $obj = new Sql();

    $stmt = $obj->buscaItem("SELECT * FROM tb_usuarios WHERE table_schema = 'db01'");

    
?>