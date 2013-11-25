<?php
include "template/user.php"
?>
	<!--ESCOLHA MENTOR-->
	<div id="mentor">
		<div id="mentor-header">
			<h1>Escolha seu Mentor</h1>
		</div>
		<div id="mentor-body">
			<form action="personagem"  method="POST">
				<table>
					<tr>
						<td>
							<a class="dcontexto">
								<label><img src="img/eddard.jpg" width="170" height="250"><br>
									<input type="radio" value="1" name="mentor"></label>
								<span>Informações de cada mentor e blabla bla blablabla bla blablabla bla blablabla bla blablabla bla blablabla bla blablabla bla bla</span>
							</a>
						</td>
						<td>
							<a class="dcontexto">
								<label><img src="img/catelyn.jpg" width="170" height="250"><br>
									<input type="radio" value="2" name="mentor"></label>
								<span>Informações de cada mentor e blabla bla blablabla bla blablabla bla blablabla bla blablabla bla blablabla bla blablabla bla bla</span>
							</a>
						</td>
						<td>
							<a class="dcontexto">
								<label><img src="img/robb.jpg" width="170" height="250"><br>
									<input type="radio" value="3" name="mentor"></label>
								<span>Informações de cada mentor e blabla bla blablabla bla blablabla bla blablabla bla blablabla bla blablabla bla blablabla bla bla</span>
							</a>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<input type="submit" value="Escolher">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div><!--FIM ESCOLHA MENTOR-->
<?php
include "template/bottom.php"
?>