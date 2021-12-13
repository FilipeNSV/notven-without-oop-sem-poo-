<?php

    class Sql extends PDO {

        private $con;

        public function __construct(){}

        public function conexao(){

            $this->con = new PDO("mysql: host=localhost; dbname=db01", "root", "");

        }

        public function criarTabela($nometb, $col1, $dadosCol1){ //Nome da tabela, Nome da coluna 1, dados da coluna 1
            //Ex: $sql->criarTabela("usuarios", "ID", "int not null auto_increment primary key");
            $this->conexao();

            $rawQuery = "CREATE TABLE $nometb($col1 $dadosCol1)";

            $stmt = $this->con->prepare($rawQuery);

            $stmt->execute();

            return $stmt;

        }

        public function adicionarColuna($nometb, $nomeCol, $dadosCol){ //Nome da tabela, Nome da coluna, dados da coluna
            //Ex: $sql->adicionarColuna("usuarios", "senha", "VARCHAR(256) NOT NULL")
            $this->conexao();

            $rawQuery = "ALTER TABLE $nometb ADD column $nomeCol $dadosCol";

            $stmt = $this->con->prepare($rawQuery);

            $stmt->execute();

            return $stmt;
            
        }
        
        public function inserirDados($tabela, $col1, $col2){ //Nome da tabela, Nome do Usuario, Senha do usuario.

            $this->conexao();

            $rawQuery = "INSERT INTO $tabela (nome, senha) VALUES ('$col1', '$col2')";

            $stmt = $this->con->prepare($rawQuery);

            $stmt->execute();

            return $stmt;

        }

        public function deletarDados($nometb, $colID, $idusuario){ //Nome da tabela, Nome coluna ID, ID.
            //Ex: $sql->deletarDados("usuarios", "idusuario", "1")
            $this->conexao();

            $rawQuery = "DELETE FROM $nometb WHERE ($colID = $idusuario)";

            $stmt = $this->con->prepare($rawQuery);

            $stmt->execute();

            return $stmt;

        }

        public function puxarDadosTb($tabela){ //Nome da tabela
            // Ex: $resultado = $sql->puxarDados("tb_usuarios");
            //     echo json_encode($resultado); 
            $this->conexao();

            $cmd = "SELECT * FROM $tabela";
            
            $stmt = $this->con->prepare($cmd);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        }

        //GERANDO ARQUIVO DA TABELA DO BANCO DE DADOS.

        /*$resultado = $sql->puxarDadosTb("tb_usuarios");

        $file = fopen("logbd.txt", "w+");

        fwrite($file, json_encode($resultado));

        fclose($file); */ 
        
        

    }

    $sql = new Sql();

    $resultado = $sql->puxarDadosTb("tb_usuarios");

    $file = fopen("logbd.txt", "w+");

    fwrite($file, json_encode($resultado));

    fclose($file);

    

  
?>