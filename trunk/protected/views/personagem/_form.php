<?php
/* @var $this PersonagemController */
/* @var $model Personagem */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'personagem-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_personagem'); ?>
		<?php echo $form->textField($model,'nome_personagem',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nome_personagem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gold_personagem'); ?>
		<?php echo $form->textField($model,'gold_personagem'); ?>
		<?php echo $form->error($model,'gold_personagem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'xp_personagem'); ?>
		<?php echo $form->textField($model,'xp_personagem'); ?>
		<?php echo $form->error($model,'xp_personagem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_level'); ?>
		<?php echo $form->textField($model,'id_level'); ?>
		<?php echo $form->error($model,'id_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_mentor'); ?>
		<?php echo $form->textField($model,'id_mentor'); ?>
		<?php echo $form->error($model,'id_mentor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario'); ?>
		<?php echo $form->error($model,'id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forca_personagem'); ?>
		<?php echo $form->textField($model,'forca_personagem'); ?>
		<?php echo $form->error($model,'forca_personagem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inteligencia_personagem'); ?>
		<?php echo $form->textField($model,'inteligencia_personagem'); ?>
		<?php echo $form->error($model,'inteligencia_personagem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vitalidade_personagem'); ?>
		<?php echo $form->textField($model,'vitalidade_personagem'); ?>
		<?php echo $form->error($model,'vitalidade_personagem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agilidade_personagem'); ?>
		<?php echo $form->textField($model,'agilidade_personagem'); ?>
		<?php echo $form->error($model,'agilidade_personagem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'defesa_personagem'); ?>
		<?php echo $form->textField($model,'defesa_personagem'); ?>
		<?php echo $form->error($model,'defesa_personagem'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->