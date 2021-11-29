<?php
    //CONEXÃO
    $con = new PDO("mysql: host=localhost;dbname=db01", "root", "");

    
    //INCLUIDO DADOS
   
    $stmt = $con->prepare("INSERT INTO tb_produtos (produto, desproduto, vlproduto) VALUES(:PRODUTO, :DESCRICAO, :VALOR)");

    $produto = "Headset Gamer";
    $descricao = "Headset Gamer Redragon Scylla, Drivers 40mm, P2 - H901";
    $valor = "550";

    $stmt->bindParam(":PRODUTO", $produto);
    $stmt->bindParam(":DESCRICAO", $descricao);
    $stmt->bindParam(":VALOR", $valor);

    $stmt->execute();

    echo "Produto inserido com Sucesso!";
   



    //ALTERANDO DADOS
   
    /*$stmt = $con->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

    $login = "joao";
    $password = "4321";
    $id = "3";

    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);
    $stmt->bindParam(":ID", $id);

    $stmt->execute();

   
    echo "Dados do Produro Alterados com Sucesso!!"*/
    



    //DELETANDO DADOS

    /*$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

    $id = "1";

    $stmt->bindParam(":ID", $id);

    $stmt->execute();

    echo "Dados Deletos com Sucesso!!";*/


    
?>