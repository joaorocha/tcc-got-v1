<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_usuario'); ?>
		<?php echo $form->textField($model,'nome_usuario',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nome_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'login_usuario'); ?>
		<?php echo $form->textField($model,'login_usuario',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'login_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'passwd_usuario'); ?>
		<?php echo $form->textField($model,'passwd_usuario',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'passwd_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_usuario'); ?>
		<?php echo $form->textField($model,'email_usuario',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'email_usuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->