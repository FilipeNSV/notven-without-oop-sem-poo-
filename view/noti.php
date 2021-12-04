<?php
    require_once("../inc/conexao.php");
    $id_noticias = $_GET['id_noticia'];
    $results_noticias = "SELECT * FROM tb_noticias WHERE idnoticia='$id_noticias'";
    $stmt = $con->prepare($results_noticias);
    $stmt->execute();
    $row_noticias = $stmt->fetch(PDO::FETCH_ASSOC);
    
?>

<?php

    require_once("header.html");
?>


      <section>
            <div class="container" id="pronot">

                <h3><?php echo $row_noticias['titulo']; ?></h3> 
                           
            </div>

            <div class="container" id="pronot1">

                <h3><?php echo $row_noticias['desnoticia']; ?></h3> 
                           
            </div>
        </section>

<?php
    require_once("footer.html");

?>