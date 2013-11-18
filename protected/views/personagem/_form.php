<?php
/* @var $this PersonagemController */
/* @var $model Personagem */
/* @var $form CActiveForm */
?>

<!--CRIAÇÃO-->
<div id="criate">
	<div id="criate-header">
		<h1>Criar Personagem</h1>
	</div>
	<div id="criate-body">

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'personagem-form',
			'enableClientValidation'=>true
		)); ?>

			<?php echo $form->errorSummary($model); ?>

			<label>Digite o nome do seu personagem:</label><br>
			<?php echo $form->textField($model,'nome_personagem',array('id'=>'tx-criar')); ?>
			<?php echo $form->error($model,'nome_personagem'); ?>
			<br><br>

			<?php echo CHtml::submitButton('Criar'); ?>

		<?php $this->endWidget(); ?>
	</div>
</div><!--FIM CRIAÇÃO-->