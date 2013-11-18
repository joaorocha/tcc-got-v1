<?php

$this->pageTitle=Yii::app()->name.': Cadastro';
if (true)  // verificar se jah tem personagem
    $this->renderPartial('_form', array('model'=>$model));
else
    $this->redirect(array('view','id'=>$model->id_personagem));

?>