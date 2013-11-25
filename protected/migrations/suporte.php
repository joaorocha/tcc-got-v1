<?php
include "template/top.php"
?>	
	<!--SUPORTE-->
	<div id="suporte">
		<h1>Suporte</h1>
		<div id="suporte-body">
			<p>Antes de mandar qualquer email para o suporte confira nosso <a href="faq.php">F.A.Q</a>, e tenha certeza de que o seu problema já não foi listado.</p>
		</div>
		<div id="suporte-form">
			<form action="" method="">
				<label>Nome:</label><br>
				<input type="text" name="nome" placeholder="Nome"><br><br>
				<label>Email:</label><br>
				<input type="text" name="email" placeholder="Email"><br><br>
				<label>Assunto:</label><br>
				<input type="text" name="assunto" placeholder="Assunto"><br><br>
				<label>Tipo:</label><br>
				<select name="tipo-suporte">
					<option name="suporte">Suporte</option>
					<option name="bug">Bug Report</option>
					<option name="duvida">Dúvidas</option>
				</select><br><br>
				<label>Escreva detalhademente seu problema:</label><br>
				<textarea rows="20" cols="70"></textarea><br><br>
				<input type="submit" value="Enviar"> 
			</form>
		</div>
	</div>
	<!--FIM SUPORTE-->
<?php
include "template/bottom.php"
?>