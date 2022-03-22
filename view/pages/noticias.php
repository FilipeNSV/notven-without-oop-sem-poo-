<?php
    require_once("../../model/dinamico.php");
    require_once("header.html");

?>

        <section>
            <div class="container">
                <div class="row">
                    <div>

                        <h1>Notícias</h1>
                        
                    </div>
                    <br>
                    <hr>

                    <?php while($row_noticias = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>

                        <div class="col-md-4 text-center">
                        <div class="card" id="cards1" style="max-width: 350px;">
                                <a href="noticia.php?id_noticia=<?php echo $row_noticias['idnoticia']; ?>">
                                        <img src="../../<?php echo $row_noticias ["imagem"]; ?>" class="card-img-top" style="width: 70%; margin-top: 10px;" alt="noticia 1">
                                    <div class="card-body">
                                        <h5 class="card-text"><?php echo $row_noticias ["titulo"]; ?></h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                    <?php } ?>

                </div>        
            </div>
        </section>

<?php

    require_once("footer.html");

?>