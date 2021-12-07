<?php
    include_once("conexao.php");
    $results_noticias = "SELECT * FROM tb_noticias";
    $stmt = $con->prepare($results_noticias);
    $stmt->execute();
    

    include_once("conexao.php");
    $results_produtos = "SELECT * FROM tb_produtos";
    $stmte = $con->prepare($results_produtos);
    $stmte->execute();

  
?>