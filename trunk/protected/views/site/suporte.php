<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ': Suporte';
?>

<!--SUPORTE-->
<div id="suporte">
	<h1>Suporte</h1>

	<div id="suporte-body">
		<p>Antes de mandar qualquer email para o suporte confira nosso <a href="javascript:void(0)">F.A.Q*</a>, e tenha certeza de que o seu problema já não foi listado.</p>
	</div>
	<div id="suporte-form">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'contact-form',
			'enableClientValidation'=>false,
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
		)); ?>
			<label>Nome:</label><br>
			<?php echo $form->textField($model,'name'); ?>
			<?php echo $form->error($model,'name'); ?>

			<br><br>

			<label>E-mail:</label><br>
			<?php echo $form->textField($model,'email'); ?>
			<?php echo $form->error($model,'email'); ?>

			<br><br>

			<label>Assunto:</label><br>
			<?php echo $form->textField($model,'subject'); ?>
			<?php echo $form->error($model,'subject'); ?>

			<br><br>

			<label>Escreva detalhademente seu problema:</label><br>
			<?php echo $form->textArea($model,'body',array('rows'=>20, 'cols'=>70)); ?>
			<?php echo $form->error($model,'body'); ?>

			<br><br>

			<?php echo CHtml::submitButton('Enviar'); ?>

		<?php $this->endWidget(); ?>

	</div>
</div>
<!--FIM SUPORTE-->