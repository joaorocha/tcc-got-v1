<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ': Erro ' . $code;
?>

<!--ERRO-->
<div id="erro">
    <div id="erro-header">
        <h1>Erro <?php echo $code; ?></h1>
    </div>
    <div id="erro-body">
        <p><?php echo CHtml::encode($message); ?></p>
        <p></p><br>
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/web/img/background.png" width="450" height="300">
        <br><a href="javascript:window.history.back()">Voltar</a>
    </div>
</div><!--FIM ERRO-->