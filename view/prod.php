<?php
    require_once("../inc/conexao.php");
    $id_produtos = $_GET['id_produto'];
    $results_produtos = "SELECT * FROM tb_produtos WHERE idproduto='$id_produtos'";
    $stmt = $con->prepare($results_produtos);
    $stmt->execute();
    $row_produtos = $stmt->fetch(PDO::FETCH_ASSOC);
    
?>

<?php

    require_once("header.html");
?>


      <section>
            <div class="container" id="pronot">

                <h3><?php echo $row_produtos['produto']; ?></h3> 
                           
            </div>

            <div class="container" id="pronot1">

                <h3><?php echo $row_produtos['desproduto']; ?></h3> 
                           
            </div>
        </section>

<?php
    require_once("footer.html");

?>