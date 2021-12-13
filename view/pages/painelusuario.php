  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Painel do Usuário</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      
    </head>
  <body>

    <header>

      <div class="container">
      
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
          <nav class="navbar navbar-dark bg-dark" style="margin-left: 50px; margin-right: 100px;" >
            <div class="container-fluid">
              <span class="navbar-brand mb-0 h1">Notven</span>
            </div>
          </nav>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                
                <li class="nav-item active">
                  <a class="btn btn-outline-success" href="../../index.php" style="margin-left: 10px; margin-right: 10px;">home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-outline-success" href="#" style="margin-left: 10px; margin-right: 10px;">menu <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-outline-success" href="#" style="margin-left: 10px; margin-right: 10px;">menu <span class="sr-only"></span></a>
                </li>
              
            </ul>
            <nav class="navbar navbar-dark bg-dark" style="margin-left: 100px;">
              <div class="float-sm-right">
                <span class="navbar-brand mb-0 h1">Painel do Usuário</span>
              </div>
            </nav>
              
        </div>
        </nav>     

      </div>

    </header>

    <section>

      <div class="container">
        <?php
            
            require_once("../../model/conexao.php");
            $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

            if(!empty($dados['SendLogin'])){
              $login = "SELECT id, usuario, senha, email FROM usuarios WHERE :nome, :senha, :email)";
              $stmt = $con->prepare($login);
              $stmt->bindParam(":nome", $dados['nomelog']);
              $stmt->bindParam(":senha", $dados['senhalog']);
              $stmt->bindParam(":email", $dados['emaillog']);
              $stmt->execute();

              if($stmt = 0) {
                echo "Erro: Nome, Email ou senha INVALIDO!";
              }
            }  
        ?>
      </div> 
      
      <div class="container">

            <img src="../img/pagina-em-construção.jpg" alt="Imagem" style="margin-top: 67px;">

      </div>

    </section>

    
  </body>
  </html>