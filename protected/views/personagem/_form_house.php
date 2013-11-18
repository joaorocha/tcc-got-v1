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
							<span>A casa Targaryen é famosa por seu poderio com dragões ebla blau poderio com dragões ebla blau poderio com dragões ebla bla</span>
						</a><br>
						<?php echo $form->radioButton($model, 'id_casa', array('value'=>1,'uncheckValue'=>null)); ?></label>
					</td>
					<td>
						<label><a class="dcontexto">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/img/casa/2.png" width="60" height="60">
							<span>A casa Targaryen é famosa por seu poderio com dragões ebla blau poderio com dragões ebla blau poderio com dragões ebla bla</span>
						</a><br>
						<?php echo $form->radioButton($model, 'id_casa', array('value'=>2,'uncheckValue'=>null)); ?></label>
					</td>
					<td>
						<label><a class="dcontexto">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/img/casa/3.png" width="60" height="60">
							<span>A casa Targaryen é famosa por seu poderio com dragões ebla blau poderio com dragões ebla blau poderio com dragões ebla bla</span>
						</a><br>
						<?php echo $form->radioButton($model, 'id_casa', array('value'=>3,'uncheckValue'=>null)); ?></label>
					</td>
				</tr>
				<tr>
					<td>
						<label><a class="dcontexto">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/img/casa/4.png" width="60" height="60">
							<span>A casa Targaryen é famosa por seu poderio com dragões ebla blau poderio com dragões ebla blau poderio com dragões ebla bla</span>
						</a><br>
						<?php echo $form->radioButton($model, 'id_casa', array('value'=>4,'uncheckValue'=>null)); ?></label>
					</td>
					<td>
						<label><a class="dcontexto">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/img/casa/5.png" width="60" height="60">
							<span>A casa Targaryen é famosa por seu poderio com dragões ebla blau poderio com dragões ebla blau poderio com dragões ebla bla</span>
						</a><br>
						<?php echo $form->radioButton($model, 'id_casa', array('value'=>5,'uncheckValue'=>null)); ?></label>
					</td>
					<td>
						<label><a class="dcontexto">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/img/casa/6.png" width="60" height="60">
							<span>A casa Targaryen é famosa por seu poderio com dragões ebla blau poderio com dragões ebla blau poderio com dragões ebla bla</span>
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