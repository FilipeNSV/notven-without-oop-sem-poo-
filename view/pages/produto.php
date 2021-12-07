<?php
    require_once("../../model/selectProd.php");
    require_once("header.html");

?>

        <section>
            <div class="container">

                <h3 class="tittle" style="text-align: center; text-decoration: underline; margin-bottom: 45px; font-size: 45px;"><?php echo $row_produtos['produto']; ?></h3> 
                           
            </div>

            <div class="container">

                <h3 style="text-align: center;"><?php echo $row_produtos['desproduto']; ?></h3> 
                           
            </div>
        </section>

<?php

    require_once("footer.html");

?>