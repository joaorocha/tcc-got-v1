<?php
/* @var $this PersonagemController */
/* @var $model Personagem */
/* @var $form CActiveForm */
?>

<!--ESCOLHA CASA-->
<div id="house">
	<div id="house-header">
		<h1>Escolha sua Casa</h1>
	</div>
	<div id="house-body">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'personagem-form',
			'enableClientValidation'=>true
		)); ?>
			<?php echo $form->errorSummary($model); ?>

			<table>
				<tr>
					<td>
						<label><a class="dcontexto">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/img/casa/1.png" width="60" height="60">
							<span>A casa Baratheon, atualmente em posse do trono, possui um forte exercito progido
									atras da forte muralha de Porto Real.</span>
						</a><br>
						<?php echo $form->radioButton($model, 'id_casa', array('value'=>1,'uncheckValue'=>null)); ?></label>
					</td>
					<td>
						<label><a class="dcontexto">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/img/casa/2.png" width="60" height="60">
							<span>A casa Stark, em grande maioria ao Norte de Westeros, possui um grande exercito,
									com soldados que possuem grande resistência a climas frios.</span>
						</a><br>
						<?php echo $form->radioButton($model, 'id_casa', array('value'=>2,'uncheckValue'=>null)); ?></label>
					</td>
					<td>
						<label><a class="dcontexto">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/img/casa/3.png" width="60" height="60">
							<span>A casa Lannister muito conhecida pela sua riqueza, juntamente com o conjuge entre os Baratheons
									possuem um lugar de grande escala dentro de Porto Real.</span>
						</a><br>
						<?php echo $form->radioButton($model, 'id_casa', array('value'=>3,'uncheckValue'=>null)); ?></label>
					</td>
				</tr>
				<tr>
					<td>
						<label><a class="dcontexto">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/img/casa/4.png" width="60" height="60">
							<span>A casa Targaryen é famosa por seu poderio com dragões, e atualmente pelo seu exercito crescente
									liderados pela última Targaryen Daenerys.</span>
						</a><br>
						<?php echo $form->radioButton($model, 'id_casa', array('value'=>4,'uncheckValue'=>null)); ?></label>
					</td>
					<td>
						<label><a class="dcontexto">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/img/casa/5.png" width="60" height="60">
							<span>A casa Greyjoy, possui grande influência e poderio com exercito marítmo e soldados muito habilidosos
									e astutos.</span>
						</a><br>
						<?php echo $form->radioButton($model, 'id_casa', array('value'=>5,'uncheckValue'=>null)); ?></label>
					</td>
					<td>
						<label><a class="dcontexto">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/img/casa/6.png" width="60" height="60">
							<span>A casa Tyrell, conhecida pela vasta riqueza de recursos e exercitos explendidos, juntamente com seu
									novo conjuge em Porto Real poderão sobreviver mais ao inverno que esta 
									por vir.</span>
						</a><br>
						<?php echo $form->radioButton($model, 'id_casa', array('value'=>6,'uncheckValue'=>null)); ?></label>
					</td>
				</tr>
				<tr>
					<td colspan="3"><?php echo CHtml::submitButton('Escolher'); ?></td>
				</tr>
			</table>
		<?php $this->endWidget(); ?>
		<p>Não esqueça que a escolha da casa só pode ser realizada uma vez, ou seja, você não poderá trocar após realizar a escolha.</p>
	</div>
</div><!--FIM ESCOLHA CASA-->
