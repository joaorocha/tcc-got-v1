<?php
include_once "template/top.php";
?>
        <div id="centro">
            <center><h2 class="cor">CADASTRO</h2></center>
            <div id="cadastro">
                <form action="cadastra_usuario.php" method="post">
                    <span class="cor">Nome: </span>  <input type="text" name="nome" placeholder="Nome"><br><br>
                    <span class="cor">Login:</span> <input type="text" name="login" placeholder="Login"><br><br>
                    <span class="cor">Senha:</span> <input type="password" name="passwd" placeholder="Senha"><br><br>
                    <input type="submit" value="Cadastrar">
                </form>
            </div>
            <img src="img/crown.jpg" width="200" height="200" class="imgcadastro">
        </div>
<?php
include_once "template/bottom.php";
?>