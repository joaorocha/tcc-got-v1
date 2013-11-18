<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<!--CADASTRO-->
<div id="cadastro">
	<h1>Cadastro</h1><br>
	<p>Para a realização do cadastro siga os seguintes passos:</p>
	<ol ="1">
		<li>Todos os campos são obrigatórios para a realização do cadastro.</li>
		<li>Todos os dados da conta são de inteira responsabilidade do usuário.</li>
		<li>Não repasse os dados da sua conta para terceiros, nem mesmo se for solicitação da própria Graveyard.</li>
		<li>Leia todas as <a href="javascript:void(0)">regras</a> antes de realizar o cadastro</li>
		<li>Confirme todos os dados antes de confirmar o cadatro.</li>
	</ol>
	<div id="cadastro-body">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'usuario-form',
			'enableClientValidation'=>true
		)); ?>

			<?php echo $form->errorSummary($model); ?>

			<label>Nome:</label><br>
			<?php echo $form->textField($model,'nome_usuario'); ?>
			<?php echo $form->error($model,'nome_usuario'); ?>
			<br><br>

			<label>Email:</label><br>
			<?php echo $form->textField($model,'email_usuario'); ?>
			<?php echo $form->error($model,'email_usuario'); ?>
			<br><br>

			<label>Login:</label><br>
			<?php echo $form->textField($model,'login_usuario'); ?>
			<?php echo $form->error($model,'login_usuario'); ?>
			<br><br>

			<label>Senha:</label><br>
			<?php echo $form->passwordField($model,'passwd_usuario'); ?>
			<?php echo $form->error($model,'passwd_usuario'); ?>
			<br><br>

			<input type="checkbox"> Li e concordo com as <a href="javascript:void(0)">regras</a>
			<br><br>

			<?php echo CHtml::submitButton('Cadastrar'); ?>
		<?php $this->endWidget(); ?>
	</div>
	<div id="cadastro-image">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/img/background.png" width="290" height="430">
	</div>
</div><!--FIM CADASTRO-->