<?php
include "template/user.php"
?>
	<!--ESCOLHA CASA-->
	<div id="house">
		<div id="house-header">
			<h1>Escolha sua Casa</h1>
		</div>
		<div id="house-body">
			<form action="mentor-stark"  method="POST">
				<table>
					<tr>
						<td>
							<a class="dcontexto">
								<img src="img/baratheon.png" width="60" height="60">
								<span>A casa Targaryen é famosa por seu poderio com dragões ebla blau poderio com dragões ebla blau poderio com dragões ebla bla</span>
							</a><br>
							<input type="radio" value="1" name="casa">
						</td>
						<td>
							<a class="dcontexto">
								<img src="img/stark.png" width="60" height="60">
								<span>A casa Targaryen é famosa por seu poderio com dragões ebla blau poderio com dragões ebla blau poderio com dragões ebla bla</span>
							</a><br>
							<input type="radio" value="2" name="casa">
						</td>
						<td>
							<a class="dcontexto">
								<img src="img/lannister.png" width="60" height="60">
								<span>A casa Targaryen é famosa por seu poderio com dragões ebla blau poderio com dragões ebla blau poderio com dragões ebla bla</span>
							</a><br>
							<input type="radio" value="3" name="casa">
						</td>
					</tr>
					<tr>
						<td>
							<a class="dcontexto">
								<img src="img/targaryen.png" width="60" height="60">
								<span>A casa Targaryen é famosa por seu poderio com dragões ebla blau poderio com dragões ebla blau poderio com dragões ebla bla</span>
							</a><br>
							<input type="radio" value="4" name="casa">
						</td>
						<td>
							<a class="dcontexto">
								<img src="img/greyjoy.png" width="60" height="60">
								<span>A casa Targaryen é famosa por seu poderio com dragões ebla blau poderio com dragões ebla blau poderio com dragões ebla bla</span>
							</a><br>
							<input type="radio" value="5" name="casa">
						</td>
						<td>
							<a class="dcontexto">
								<img src="img/tyrell.png" width="60" height="60">
								<span>A casa Targaryen é famosa por seu poderio com dragões ebla blau poderio com dragões ebla blau poderio com dragões ebla bla</span>
							</a><br>
							<input type="radio" value="6" name="casa">
						</td>
					</tr>
					<tr>
						<td colspan="3"><input type="submit" value="Escolher"></td>
					</tr>
				</table>
			</form>
			<p>Não esqueça que a escolha da casa só pode ser realizada uma vez, ou seja, você não poderá trocar após realizar a escolha.</p>
		</div>
	</div><!--FIM ESCOLHA CASA-->
<?php
include "template/bottom.php"
?>