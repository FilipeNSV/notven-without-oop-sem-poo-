<?php?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>notven</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/styleresponsivo.css">
    </head>
    <body>
        <header>

            <div class="container" id="topo">

                <div class="row">

                    <div class="col-md-4">
                        <img src="img/logo.png" alt="logo" id="logo">
                    </div>

                    <div class="col-md-4">
                        <img src="img/publicidade.png" alt="Imagem" id="publicidade">
                    </div> 

                    <div class="col-md-4">
                        <div id="search">
                            <form class="form-inline" action="busca.php" method="GET">
                                <div class="form-group">
                                    <input type="search" name="busca" id="searchLine" placeholder="Pesquisa...">
                                    <button type="submit" id="searchButton"><img src="icon/search.svg" alt=""></button>
                                </div>   
                            </form>    
                        </div>
                    </div> 

                </div>
           

            </div>

            <div class="container" id="menuresp">
                <button type="button" id="searchBtn"><img src="icon/search.svg" alt=""></button>
                <button type="button" id="menuBtn"><img src="icon/list.svg" alt=""></button>
            </div>

            <div class="container">
                <ul id="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="view/mercado.php">Mercado</a></li>
                    <li><a href="view/noticias.php">Notícias</a></li>
                </ul>
                
            </div>   

        </header>

        <section>
           <div id="secao">
                <div>
                    <h1>Notícias</h1>
                    
                </div>

                <div id="news" class="container">

                    <div class="row">
                        <div class="col-md-4"><a href="#"><img src="img/ntc1.jpg" alt=""><br><br>Novo Snapdragon ultrapassa 1 milhão de pontos no AnTuTu</a></div>
                        <div class="col-md-4"><a href="#"><img src="img/ntc2.jpg" alt=""><br><br>6 consoles para comprar na Black Friday 2021</a></div>
                        <div class="col-md-4"><a href="#"><img src="img/ntc3.jpg" alt=""><br><br>5 streaming players para adquirir na Black Friday 2021</a></div>
                    </div>

                </div>

                <div>
                    <h2>Produtos</h2>
                    
                </div>

                <div id="Products" class="container">

                    <div class="row">
                        <div class="col-md-4"><a href="#"><img src="img/img1.jpg" alt=""><br><br>Processador AMD Ryzen 5 5600G, 3.9GHz (4.4GHz Max Turbo), AM4, Vídeo Integrado, 6 Núcleos - 100-100000252BOX</a></div>
                        <div class="col-md-4"><a href="#"><img src="img/img2.jpg" alt=""><br><br>Nintendo Switch 32GB, 1x Joycon, Neon Azul/Vermelho - HBDSKABA1</a></div>
                        <div class="col-md-4"><a href="#"><img src="img/img3.jpg" alt=""><br><br>Headset Gamer Redragon Scylla, Drivers 40mm, P2 - H901</a></div>
                    </div>

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

<?php?>

