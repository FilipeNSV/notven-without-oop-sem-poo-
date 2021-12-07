<?php
    require_once("../../model/dinamico.php");
    require_once("header.html");

?>

<section>

<section>
            <div class="container">
                <div class="row">

                    <div>
                        
                        <h1>Produtos</h1>
                        
                    </div>

                    <?php while($row_produtos = $stmte->fetch(PDO::FETCH_ASSOC)) { ?>

                        <div class="col-md-4">
                            <div class="card text-center" style="width: 100%; margin-top: 30px;">
                               <img src="../../<?php echo $row_produtos ["imagem"]; ?>" class="card-img-top img-thumbnail border border-dark rounded" style="width: 80%; margin-top: 10px; margin-left: 40px;" alt="Porduto">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row_produtos ["produto"]; ?></h5>
                                    <p class="card-text"><?php echo $row_produtos ["desproduto"]; ?></p>
                                    <a href="produto.php?id_produto=<?php echo $row_produtos['idproduto']; ?>" class="btn btn-success">Comprar!</a>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>        
            </div>
        </section>

</section>

<?php

    require_once("footer.html");

?>