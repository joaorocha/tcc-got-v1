<?php
if (!Yii::app()->user->isGuest)
    header("Location: Yii::app()->request->baseUrl");

$this->pageTitle=Yii::app()->name . ': Cadastro';
$this->renderPartial('_form', array('model'=>$model));

?>