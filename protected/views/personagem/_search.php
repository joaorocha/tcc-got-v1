<?php
/* @var $this PersonagemController */
/* @var $model Personagem */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_personagem'); ?>
		<?php echo $form->textField($model,'id_personagem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_personagem'); ?>
		<?php echo $form->textField($model,'nome_personagem',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gold_personagem'); ?>
		<?php echo $form->textField($model,'gold_personagem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'xp_personagem'); ?>
		<?php echo $form->textField($model,'xp_personagem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_level'); ?>
		<?php echo $form->textField($model,'id_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_mentor'); ?>
		<?php echo $form->textField($model,'id_mentor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'forca_personagem'); ?>
		<?php echo $form->textField($model,'forca_personagem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inteligencia_personagem'); ?>
		<?php echo $form->textField($model,'inteligencia_personagem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vitalidade_personagem'); ?>
		<?php echo $form->textField($model,'vitalidade_personagem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agilidade_personagem'); ?>
		<?php echo $form->textField($model,'agilidade_personagem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'defesa_personagem'); ?>
		<?php echo $form->textField($model,'defesa_personagem'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->