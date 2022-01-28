<?php

   require_once("./controller/config.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NotVen02</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="view/css/style.css">
        <link rel="stylesheet" href="view/css/styleresponsivo.css">
    </head>
    <body>

        <header>

            <div class="container">
                
                <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    
                    
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                                <li class="nav-item active">
                                    <a class="btn btn-outline-success" href="index.php" style="margin-left: 10px; margin-right: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                                      </svg>  <span class="sr-only"></span>
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="btn btn-outline-success" href="view/pages/usuario.php" style="margin-left: 10px; margin-right: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        </svg> <span class="sr-only"></span>
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="btn btn-outline-success" href="view/pages/mercado.php" style="margin-left: 10px; margin-right: 10px;">Mercado <span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="btn btn-outline-success" href="view/pages/noticias.php" style="margin-left: 10px; margin-right: 10px;">Notícias <span class="sr-only"></span></a>
                                </li>
                            </ul>
                        </div>

                    <div class="float-sm-right">
                        <form class="form-inline" style="margin-right: 20px; display: flex;">
                            <input id="search" class="form-control mr-sm-2" type="search" placeholder="Busca..." aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                              </svg></button>
                          </form>
                    </div>  
                    
                  </nav>
                </nav>                  
                  
            </div>

            <div class="container">
                <div class="row" id="imagens">
                    <div class=" col-md-6 text-center">

                        <div class="media">

                            <img class="mr-3" src="view/img/logo.png" id="logo" alt="Generic placeholder image">
                            
                        </div>
                    </div>
                    <div class=" col-md-6 text-center">
                        
                        <div class="media" id="promo">

                            <img class="mr-3" src="view/img/promo.png" alt="Generic placeholder image" style="margin-top: 60px;">
                            
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <section>
            <div class="container">
                <div class="row">
                    <div>

                        <h1>Notícias</h1>
                        
                    </div>

                    <?php while($row_noticias = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>

                        <div class="col-md-4">
                            <div class="card text-center" style="width: 100%; margin-top: 30px;">
                                <a href="view/pages/noticia.php?id_noticia=<?php echo $row_noticias['idnoticia']; ?>">
                                        <img src="<?php echo $row_noticias ["imagem"]; ?>" class="card-img-top img-thumbnail border border-dark rounded" style="width: 80%; margin-top: 10px;" alt="noticia 1">
                                    <div class="card-body">
                                        <h5 class="card-text"><?php echo $row_noticias ["titulo"]; ?></h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                    <?php } ?>

                    <div>
                        
                        <h1>Produtos</h1>
                        
                    </div>

                    <?php while($row_produtos = $stmte->fetch(PDO::FETCH_ASSOC)) { ?>

                        <div class="col-md-4">
                            <div class="card text-center" style="width: 100%; margin-top: 30px;">
                               <img src="<?php echo $row_produtos ["imagem"]; ?>" class="card-img-top img-thumbnail border border-dark rounded" style="width: 80%; margin-top: 10px; margin-left: 40px;" alt="Porduto">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row_produtos ["produto"]; ?></h5>
                                    <p class="card-text"><?php echo $row_produtos ["desproduto"]; ?></p>
                                    <a href="view/pages/produto.php?id_produto=<?php echo $row_produtos['idproduto']; ?>" class="btn btn-success">Comprar!</a>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>        
            </div>
        </section>

        <footer>
                <div class="container" id="footer">
            <div class="row">
                <div class="col-md-4">SOBRE NÓS:<br>Somos uma empresa empenhada em dar notícias legítimas e vender produtos de ótima qualidade.</div>
                    <div class="col-md-4">SUPORTE:<br>(87) 98800-1234<br>email@gmail.com</div>
                    <div class="col-md-4">SIGA-NOS:<br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitch" viewBox="0 0 16 16">
                        <path d="M3.857 0 1 2.857v10.286h3.429V16l2.857-2.857H9.57L14.714 8V0H3.857zm9.714 7.429-2.285 2.285H9l-2 2v-2H4.429V1.143h9.142v6.286z"/>
                        <path d="M11.857 3.143h-1.143V6.57h1.143V3.143zm-3.143 0H7.571V6.57h1.143V3.143z"/>
                    </svg>Twitch<br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg>Twitter<br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>Facebook</div>
                </div>
            </div>
        </footer>
        
    </body>
</html>