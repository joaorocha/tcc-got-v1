<?php
/* @var $this MissaoController */
/* @var $model Missao */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'missao-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_missao'); ?>
		<?php echo $form->textField($model,'nome_missao',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nome_missao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao_missao'); ?>
		<?php echo $form->textArea($model,'descricao_missao',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descricao_missao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duracao_missao'); ?>
		<?php echo $form->textField($model,'duracao_missao'); ?>
		<?php echo $form->error($model,'duracao_missao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'min_xp_missao'); ?>
		<?php echo $form->textField($model,'min_xp_missao'); ?>
		<?php echo $form->error($model,'min_xp_missao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'max_xp_missao'); ?>
		<?php echo $form->textField($model,'max_xp_missao'); ?>
		<?php echo $form->error($model,'max_xp_missao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'min_gold_missao'); ?>
		<?php echo $form->textField($model,'min_gold_missao'); ?>
		<?php echo $form->error($model,'min_gold_missao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'max_gold_missao'); ?>
		<?php echo $form->textField($model,'max_gold_missao'); ?>
		<?php echo $form->error($model,'max_gold_missao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->