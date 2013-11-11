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
		<p>Antes de mandar qualquer email para o suporte confira nosso <a href="faq.php">F.A.Q</a>, e tenha certeza de que o seu problema já não foi listado.</p>
	</div>
	<div id="suporte-form">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'contact-form',
			'enableClientValidation'=>true,
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
		)); ?>

		<?php echo $form->errorSummary($model); ?>

			<?php echo $form->labelEx($model,'name'); ?><br>
			<?php echo $form->textField($model,'name'); ?>
			<?php echo $form->error($model,'name'); ?>

			<br><br>

			<?php echo $form->labelEx($model,'email'); ?><br>
			<?php echo $form->textField($model,'email'); ?>
			<?php echo $form->error($model,'email'); ?>

			<br><br>

			<?php echo $form->labelEx($model,'subject'); ?><br>
			<?php echo $form->textField($model,'subject'); ?>
			<?php echo $form->error($model,'subject'); ?>

			<br><br>

			<?php if(CCaptcha::checkRequirements()): ?>
				<?php echo $form->labelEx($model,'verifyCode'); ?><br>
				<?php echo $form->textField($model,'verifyCode'); ?>
				<?php echo $form->error($model,'verifyCode'); ?><br><br>
				<?php $this->widget('CCaptcha'); ?>
				<?php $buttonOptions = 'teste'; ?>
			<?php endif; ?>

			<br><br>

			<?php echo $form->labelEx($model,'body'); ?><br>
			<?php echo $form->textArea($model,'body',array('rows'=>20, 'cols'=>70)); ?>
			<?php echo $form->error($model,'body'); ?>

			<br><br>

			<?php echo CHtml::submitButton('Enviar'); ?>

		<?php $this->endWidget(); ?>

	</div>
</div>
<!--FIM SUPORTE-->