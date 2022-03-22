<?php
    require_once("../../model/dinamico.php");
    require_once("header.html");

?>

<section>

<section>
            <div class="container">
                <div class="row">

                    <div>
                        
                        <h1>Mercado</h1>
                        
                    </div>
                    <hr>

                    <?php while($row_produtos = $stmte->fetch(PDO::FETCH_ASSOC)) { ?>

                        <div class="col-md-4">
                        <div class="card" style="max-width: 350px; height: 420px;">
                                <div class="card-body text-center"  id="cards2">
                               <img src="../../<?php echo $row_produtos ["imagem"]; ?>" class="card-img-top" style="max-width: 70%; margin-top: 10px;" alt="Porduto">
                                    <h5 class="card-title"><?php echo $row_produtos ["produto"]; ?></h5>
                                    <p class="card-text"><?php echo $row_produtos ["desproduto"]; ?></p>
                                    <a href="produto.php?id_produto=<?php echo $row_produtos['idproduto']; ?>" class="btn btn-success">Comprar!</a>
                                </div>
                            </div><br>
                        </div>

                    <?php } ?>
                </div>        
            </div>
        </section>

</section>

<?php

    require_once("footer.html");

?>