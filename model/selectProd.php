<?php

require_once("conexao.php");
$id_produtos = $_GET['id_produto'];
$results_produtos = "SELECT * FROM tb_produtos WHERE idproduto='$id_produtos'";
$stmt = $con->prepare($results_produtos);
$stmt->execute();
$row_produtos = $stmt->fetch(PDO::FETCH_ASSOC);

?>