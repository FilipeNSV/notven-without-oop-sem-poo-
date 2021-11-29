<?php

//CONEXÃO
$con = new PDO("(:SERVIDOR): host=(:ROTA);dbname=(:NAME)", "(:LOGIN)", "(:SENHA)");

$servidor = "mysql";
$rota = "localhost";
$dbname = "db01";
$login = "root";
$senha = "";

$stmt->bindParam(":SERVIDOR", $servidor);
$stmt->bindParam(":ROTA", $rota);
$stmt->bindParam(":NAME", $dbname);
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);

$stmt = con;

$stmt->execute();

echo "Conexão estabelecida!"

?>