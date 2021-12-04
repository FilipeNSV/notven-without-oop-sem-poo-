<?php

    require_once("header.html");

    include_once("../inc/conexao.php");
    $results_produtos = "SELECT * FROM tb_produtos";
    $stmte = $con->prepare($results_produtos);
    $stmte->execute();
    
?>
      <section id="secao">

        <div class="container">

            <div class="row">
                <div>
                    <h2>MERCADO</h2>
                    
                </div>

                <?php while($row_produtos = $stmte->fetch(PDO::FETCH_ASSOC)) { ?>
                    
                    <div class="col-md-4">
                        <div class="card text-center" style="width: 20rem;">
                            <img src="../img/img.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row_produtos ["produto"]; ?></h5>
                            <p class="card-text"><?php echo $row_produtos ["desproduto"]; ?></p>
                            <a href="../view/prod.php?id_produto=<?php echo $row_produtos['idproduto']; ?>" class="btn btn-primary" style="background-color: #2C3E50;color: white;border: none;">Comprar!</a>
                        </div>
                        </div>
                    </div>

                <?php } ?>
            </section>
        </div>  
    </div>             
<?php
    require_once("footer.html");

?>