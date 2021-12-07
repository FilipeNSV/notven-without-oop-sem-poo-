<?php

require_once("conexao.php");
$id_noticias = $_GET['id_noticia'];
$results_noticias = "SELECT * FROM tb_noticias WHERE idnoticia='$id_noticias'";
$stmt = $con->prepare($results_noticias);
$stmt->execute();
$row_noticias = $stmt->fetch(PDO::FETCH_ASSOC);


?>