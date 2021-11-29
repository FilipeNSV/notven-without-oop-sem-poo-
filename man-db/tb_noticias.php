<?php
    //CONEXÃO
    $con = new PDO("mysql: host=localhost;dbname=db01", "root", "");

    
    //INCLUIDO DADOS
   
    $stmt = $con->prepare("INSERT INTO tb_noticias (titulo, desnoticia) VALUES(:TITULO, :NOTICIA)");

    $titulo = "5 streaming players para adquirir na Black Friday 2021";
    $noticia = "A principal vantagem do gadget é a praticidade. Por serem pequenos e leves, é possível levá-los para qualquer lugar e garantir filmes e séries sem maiores preocupações. Para quem planeja umas férias na praia, por exemplo, vai poder se divertir com a família, assistindo a filmes e séries a qualquer hora.
                Outro detalhe importante é conferir quais são os aplicativos compatíveis com cada modelo. Embora os principais serviços de streaming possam estar disponíveis na maioria, alguns dos mais recentes, como o Star+, ainda pode não aparecer em alguns. Por isso, vale a pena conferir o que cada um costuma oferecer.";

    $stmt->bindParam(":TITULO", $titulo);
    $stmt->bindParam(":NOTICIA", $noticia);

    $stmt->execute();

    echo "Notícia inserida com Sucesso!";



    //ALTERANDO DADOS
   
    /*$stmt = $con->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

    $login = "joao";
    $password = "4321";
    $id = "3";

    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);
    $stmt->bindParam(":ID", $id);

    $stmt->execute();

    echo "Dados da Notícia Alterados com Sucesso!!";*/



    //DELETANDO DADOS

    /*$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

    $id = "1";

    $stmt->bindParam(":ID", $id);

    $stmt->execute();

    echo "Dados Deletos com Sucesso!!";*/


    
?>