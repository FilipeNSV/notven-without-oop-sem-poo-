<?php
    require_once("../../model/selectNoti.php");
    require_once("header.html");

?>

        <section>
            <div class="container">

                <h3 class="tittle" style="text-align: center; text-decoration: underline; margin-bottom: 45px; font-size: 45px;"><?php echo $row_noticias['titulo']; ?></h3> 
                           
            </div>

            <div class="container">

                <h3><?php echo $row_noticias['desnoticia']; ?></h3> 
                           
            </div>
        </section>

<?php

    require_once("footer.html");

?>