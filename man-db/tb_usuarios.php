<?php
    //CONEXÃO
    $con = new PDO("mysql: host=localhost;dbname=db01", "root", "");

    
    //INCLUIDO DADOS
   
    $stmt = $con->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

    $login = "Escanor";
    $password = "123";

    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);

    $stmt->execute();

    echo "Usuário inserido com Sucesso!"
    



    //ALTERANDO DADOS
   
    /*$stmt = $con->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

    $login = "joao";
    $password = "4321";
    $id = "3";

    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);
    $stmt->bindParam(":ID", $id);

    $stmt->execute();

    echo "Dados do Usuário Alterados com Sucesso!!"*/
    



    //DELETANDO DADOS

    /*$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

    $id = "1";

    $stmt->bindParam(":ID", $id);

    $stmt->execute();

    echo "Dados Deletos com Sucesso!!";*/


    
?>