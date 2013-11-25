<?php
include "template/user.php"
?>
	<!--CRIAÇÃO-->
	<div id="criate">
		<div id="criate-header">
			<h1>Criar Personagem</h1>
		</div>
		<div id="criate-body">
			<form action="house" method="POST">
				<label>Digite o nome do seu personagem:</label><br>
				<input type="text" name="personagem" placeholder="Nome do personagem" id="tx-criar"><br><br>
				<input type="submit" value="Criar">
			</form>
		</div>
	</div><!--FIM CRIAÇÃO-->
<?php
include "template/bottom.php"
?>