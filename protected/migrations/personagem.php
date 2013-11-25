<?php
include "template/user.php"
?>
	<!--PERSONAGEM-->
	<div id="person">
		<div id="person-header">
			<h1>Personagem</h1>
		</div>
		<div id="person-body">
			<table>
				<tr>
					<td class="player">
						<label>Player: Moises</label>

						<img src="img/banner_targaryen.jpg"><br>
					</td>
					<td rowspan="2"><img src="img/targaryen.png" width="60" height="60"></td>
					<td rowspan="2"><img src="img/daenerys.jpg" width="170" height="250"></td>
				</tr>
				<tr>
					<td>
						<p><label class="status">Level: 1</label>
						<progress max="50" value="1" class="yellow"></progress></p>
						<p><label class="status">XP: 1</label>
						<progress max="25" value="1" class="slateblue"></progress></p>
						<br>
						<label class="status">Força: 10</label>
						<progress max="99" value="10" class="orange"></progress>
						<label class="status">Inteligência: 2</label>
						<progress max="99" value="2" class="blue"></progress>
						<label class="status">Vitalidade: 2</label>
						<progress max="99" value="2" class="red"></progress>
						<label class="status">Agilidade: 1</label>
						<progress max="99" value="1" class="green"></progress>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<img src="img/mercado.jpg" style="margin:10px 0px 5px 0px;"><br>
						<label id="gold">Gold atual: 300</label>
						<a href="#"><button>Ir para o Mercado</button></a>
					</td>
				</tr>
			</table>
		</div>
	</div><!--FIM PERSONAGEM-->
<?php
include "template/bottom.php"
?>