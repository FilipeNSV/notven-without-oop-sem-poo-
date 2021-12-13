<?php    
    require_once("header.html");
?>

    <div class="container" style="margin-top: 90px; margin-bottom: 90px">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <h3 class="text text-center" style="margin-top: 15px; color: green;"> Cadastro </h3>
                    <?php
                        
                    ?>
                    <div class="card-body">
                        <form method="POST" action="cadastro.php">
                            <div class="form-floating mb-3">
                                <input type="name" name="nome" class="form-control" style="width: 600px;" id="floatingInput" placeholder="Nome/Usuário" required>
                                <label for="floatingInput">Nome</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" style="width: 600px;" id="emailform" placeholder="name@example.com" required>
                                <label for="floatingInput">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="senha" class="form-control" style="width: 600px;" id="senhaform" placeholder="Password" required>
                                <label for="floatingPassword">Senha</label>
                            </div>
                            <button type="submit" class="btn btn-success" style="margin-top: 10px;">Cadastrar!</button>
                        </form>    
                    </div>
                </div>  
            </div> 
            
            <div class="col-sm-6">
                <div class="card">
                    <h3 class="text text-center" style="margin-top: 15px; color: green;"> Login </h3>
                    <div class="card-body">
                        <form method="POST" action="painelusuario.php">
                            <div class="form-floating mb-3">
                                <input type="name" name="nomelog" class="form-control" style="width: 600px; " id="nomeform" placeholder="Nome/Usuário" required>
                                <label for="floatingInput">Nome</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" name="emaillog" class="form-control" style="width: 600px;" id="emailform" placeholder="name@example.com" required>
                                <label for="floatingInput">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="senhalog" class="form-control" style="width: 600px;" id="senhaform" placeholder="Password" required>
                                <label for="floatingPassword">Senha</label>
                            </div>
                            <button type="submit" class="btn btn-success" value="Acesar" name="SendLogin" style="margin-top: 10px;">Login</button>
                        </form>    
                    </div>
                </div>  
            </div> 
        </div>           
    </div>

    

<?php    
    require_once("footer.html");
?>