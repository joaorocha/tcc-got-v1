<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
if (!Yii::app()->user->isGuest)
	header("Location: Yii::app()->request->baseUrl");

$this->pageTitle=Yii::app()->name . ': Login';?>

<!--LOGIN-->
<div id="login">
	<div id="login-header">
		<h1>Login</h1>
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'login-form',
			'enableClientValidation'=>false,
			'clientOptions'=>array('validateOnSubmit'=>true)
		)); ?>
			<?php echo $form->error($model,'username'); ?>
			<?php echo $form->error($model,'password'); ?>
			<br>
		<p>Para a realização do login siga os seguintes passos:</p>
		<ol start="1">
			<li>Realize o cadastro em nosso site <a href="<?php echo Yii::app()->request->baseUrl; ?>/usuario/create">clicando aqui</a>.</li>
			<li>Preencha os campos com os dados que foram preenchidos no cadastro.</li>
			<li>Todos os dados da conta são de inteira responsabilidade do usuário.</li>
			<li>Não repasse os dados da sua conta para terceiros, nem mesmo se for solicitação da própria
				Graveyard.</li>
			<li>Respeite as <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/page/view/regras">regras</a> quando estiver dentro do jogo.</li>
			<li>Tenha certeza de que todos os dados digitados estão corretos antes de confirmar o login.</li>
		</ol>
	</div>
	<div id="login-body">

			<label>Login:</label><br>
			<?php echo $form->textField($model,'username'); ?>
			<br><br>

			<label>Senha:</label><br>
			<?php echo $form->passwordField($model,'password'); ?>
			<br><br>

			<?php echo CHtml::submitButton('Logar'); ?><br>
		<?php $this->endWidget(); ?><br>
		<a href="javascript:void(0)">Esqueceu a senha?</a>
	</div>
	<div id="login-image">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/img/background.png" width="290" height="430">
	</div>
</div>
<!--FIM LOGIN-->