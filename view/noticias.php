<?php

    require_once("header.html");

    include_once("../inc/conexao.php");
    $results_noticias = "SELECT * FROM tb_noticias";
    $stmt = $con->prepare($results_noticias);
    $stmt->execute();
?>
      <section id="secao">
          
      <div class="container">
                <div class="row">
                    <div>

                        <h1>Notícias</h1>
                        
                    </div>

                    <?php while($row_noticias = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>

                        <div class="col-md-4">
                            <div class="card text-center" style="width: 20rem;"><a href="../view/noti.php?id_noticia=<?php echo $row_noticias['idnoticia']; ?>">
                                    <img src="../<?php echo $row_noticias ["imagem"]; ?>" class="card-img-top" alt="noticia 1">
                                <div class="card-body">
                                    <p class="card-text"><?php echo $row_noticias ["titulo"]; ?></p>
                                </div></a>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
            
        </section>

<?php
    require_once("footer.html");

?>