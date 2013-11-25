<?php
include "template/top.php"
?>
	<!--LOGIN-->
	<div id="login">
		<div id="login-header">
			<h1>Login</h1>
			<p>Para a realização do login siga os seguintes passos:</p>
			<ol ="1">
				<li>Realize o cadastro em nosso site <a href="cadastro.php">clicando aqui</a>.</li>
				<li>Preencha os campos com os dados que foram preenchidos no cadastro.</li>
				<li>Todos os dados da conta são de inteira responsabilidade do usuário.</li>
				<li>Não repasse os dados da sua conta para terceiros, nem mesmo se for solicitação da própria
					Graveyard.</li>
				<li>Respeite as <a href="rules.php">regras</a> quando estiver dentro do jogo.</li>
				<li>Tenha certeza de que todos os dados digitados estão corretos antes de confirmar o login.</li>
			</ol>
		</div>
		<div id="login-body">
				<form action="" method="">
				<label>Login:</label><br>
				<input type="text" name="login" placeholder="Login"><br><br>
				<label>Senha:</label><br>
				<input type="password" name="nome" placeholder="Senha"><br><br>
				<input type="submit" value="Logar">
			</form><br>
			<a href="recover.php">Esqueceu a senha?</a>
		</div>
		<div id="login-image">
			<img src="img/background.png" width="290" height="430">
		</div>
	</div>
	<!--FIM LOGIN-->
<?php
include "template/bottom.php"
?>