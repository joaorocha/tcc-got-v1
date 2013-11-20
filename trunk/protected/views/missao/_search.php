<?php
/* @var $this MissaoController */
/* @var $model Missao */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_missao'); ?>
		<?php echo $form->textField($model,'id_missao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_missao'); ?>
		<?php echo $form->textField($model,'nome_missao',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descricao_missao'); ?>
		<?php echo $form->textArea($model,'descricao_missao',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'duracao_missao'); ?>
		<?php echo $form->textField($model,'duracao_missao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'min_xp_missao'); ?>
		<?php echo $form->textField($model,'min_xp_missao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'max_xp_missao'); ?>
		<?php echo $form->textField($model,'max_xp_missao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'min_gold_missao'); ?>
		<?php echo $form->textField($model,'min_gold_missao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'max_gold_missao'); ?>
		<?php echo $form->textField($model,'max_gold_missao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->