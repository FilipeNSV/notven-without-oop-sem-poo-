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

                    <?php while($row_noticias = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>

                        <div class="col-md-4">
                            <div class="card text-center" style="width: 100%; margin-top: 30px;">
                                <a href="noticia.php?id_noticia=<?php echo $row_noticias['idnoticia']; ?>">
                                        <img src="../../<?php echo $row_noticias ["imagem"]; ?>" class="card-img-top img-thumbnail border border-dark rounded" style="width: 80%; margin-top: 10px;" alt="noticia 1">
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