<?php
/* @var $this PersonagemController */
/* @var $model Personagem */
/* @var $form CActiveForm */
?>

<!--ESCOLHA MENTOR-->
<div id="mentor">
	<div id="mentor-header">
		<h1>Escolha seu Mentor</h1>
	</div>
	<div id="mentor-body">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'personagem-form',
			'enableClientValidation'=>true
		)); ?>
			<?php echo $form->errorSummary($model); ?>
			<?php $mentores = $model->listaMentores($model->id_casa); ?>

			<table>
				<tr>
					<td>
						<a class="dcontexto">
							<label><img src="<?php echo Yii::app()->request->baseUrl.'/assets/web/img/mentor/'.$mentores[0].'.jpg'; ?>" width="170" height="250"><br>
							<?php echo $form->radioButton($model, 'id_mentor', array('value'=>$mentores[0],'uncheckValue'=>null)); ?></label>
							<span>Informações de cada mentor e blabla bla blablabla bla blablabla bla blablabla bla blablabla bla blablabla bla blablabla bla bla</span>
						</a>
					</td>
					<td>
						<a class="dcontexto">
							<label><img src="<?php echo Yii::app()->request->baseUrl.'/assets/web/img/mentor/'.$mentores[1].'.jpg'; ?>" width="170" height="250"><br>
							<?php echo $form->radioButton($model, 'id_mentor', array('value'=>$mentores[1],'uncheckValue'=>null)); ?></label>
							<span>Informações de cada mentor e blabla bla blablabla bla blablabla bla blablabla bla blablabla bla blablabla bla blablabla bla bla</span>
						</a>
					</td>
					<td>
						<a class="dcontexto">
							<label><img src="<?php echo Yii::app()->request->baseUrl.'/assets/web/img/mentor/'.$mentores[2].'.jpg'; ?>" width="170" height="250"><br>
							<?php echo $form->radioButton($model, 'id_mentor', array('value'=>$mentores[2],'uncheckValue'=>null)); ?></label>
							<span>Informações de cada mentor e blabla bla blablabla bla blablabla bla blablabla bla blablabla bla blablabla bla blablabla bla bla</span>
						</a>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<?php echo CHtml::submitButton('Escolher'); ?>
					</td>
				</tr>
			</table>
		<?php $this->endWidget(); ?>
	</div>
</div><!--FIM ESCOLHA MENTOR-->