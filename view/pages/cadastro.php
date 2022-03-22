<?php
    require_once("header.html"); 
    require_once("../../model/conexao.php");   
?>
   
   <section>
        <div class="container" style="color: green; text-align: center; font-size: 50px; margin-bottom: 250px; margin-top: 250px;">
            <?php
                

                $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

                if(!empty($dados['nome'])){
                    $cadastro = "INSERT INTO usuarios (usuario, senha, email) VALUES (:nome, :senha, :email)";
                    $stmt = $con->prepare($cadastro);
                    $stmt->bindParam(":nome", $dados['nome']);
                    $stmt->bindParam(":senha", $dados['senha']);
                    $stmt->bindParam(":email", $dados['email']);
                    $stmt->execute();
                    
                    if($stmt->rowCount()) {
                        echo "Usuário cadastrado com sucesso!<br>";
                    } else {
                        echo "Erro! Usuário não cadastrado!<br>";
                    }
                
                } 
            ?>  
        </div> 
        <div class="container" style="text-align: center;">
            <a type="button" href="usuario.php" class="btn btn-success" style="margin-top: 10px;">Voltar para Login!</a>
        </div>    
    </section> 

<?php    
    require_once("footer.html");   
?>