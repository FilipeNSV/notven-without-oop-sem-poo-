<?php

//CONEXÃO
$servername = "localhost"; // Host do bando de dados.
$username = "root"; // Usuário que vai se connectar com o banco de dados
$password = ""; // Senha do usuário
 
try {
  $conn = new PDO("mysql:host=$servername;dbname=db01", $username, $password); // conexão padrão para DB em MYSQL
    // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>