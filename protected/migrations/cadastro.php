<?php
include "template/top.php"
?>
	<!--CADASTRO-->
	<div id="cadastro">
		<h1>Cadastro</h1><br>
		<p>Para a realização do cadastro siga os seguintes passos:</p>
		<ol ="1">
			<li>Todos os campos são obrigatórios para a realização do cadastro.</li>
			<li>Todos os dados da conta são de inteira responsabilidade do usuário.</li>
			<li>Não repasse os dados da sua conta para terceiros, nem mesmo se for solicitação da própria Graveyard.</li>
			<li>Leia todas as <a href="rules.php">regras</a> antes de realizar o cadastro</li>
			<li>Confirme todos os dados antes de confirmar o cadatro.</li>
		</ol>
		<div id="cadastro-body">
			<form action="create" method="POST">
				<label>Nome:</label><br>
				<input type="text" name="nome" placeholder="Nome"><br><br>
				<label>Email:</label><br>
				<input type="text" name="email" placeholder="Email"><br><br>
				<label>Login:</label><br>
				<input type="text" name="login" placeholder="Login"><br><br>
				<label>Senha:</label><br>
				<input type="password" name="nome" placeholder="Senha"><br><br>
				<input type="checkbox"> Li e concordo com as <a href="rules.php">regras</a><br><br>
				<input type="submit" value="Cadastrar">
			</form>
		</div>
		<div id="cadastro-image">
			<img src="#" width="290" height="430">
		</div>
	</div><!--FIM CADASTRO-->
<?php
include "template/bottom.php"
?>