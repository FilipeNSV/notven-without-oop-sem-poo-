<?php

    $results_produtos = "SELECT * FROM tb_produtos WHERE idproduto='2'";
    $stmt = $con->prepare($results_produtos);
    $stmt->execute();
    $row_produtos = $stmt->fetch(PDO::FETCH_ASSOC);

    

    $con = new PDO("mysql: host=loscalhost; dbname=db01", "root", "");

   
    $results_produtos = "SELECT * FROM (:TABELA) WHERE (:COLUNA)='(:IDPRODUTO)'";
    $stmt = $con->prepare($results_produtos);
    
    $row_produtos = $stmt->fetch(PDO::FETCH_ASSOC);

    $tabela = "tb_produtos";
    $coluna = "idproduto";
    $idprod = "2";

    $stmt->bindParam(":TABELA", $tabela);
    $stmt->bindParam(":COLUNA", $coluna);
    $stmt->bindParam(":IDPRODUTO", $idprod);

    $stmt->execute();


    
    /*include_once("inc/conexao.php");
    $results_produtos = "SELECT * FROM tb_produtos WHERE idproduto='2'";
    $stmt = $con->prepare($results_produtos);
    $stmt->execute();
    $row_produtos = $stmt->fetch(PDO::FETCH_ASSOC);

    echo $row_produtos['desproduto']; colocar no local aonde deve aparecer as informações.*/
   

?>