<?php

$this->pageTitle=Yii::app()->name.': Cadastro';
if (is_null($model->id_casa))
    $this->renderPartial('_form_house', array('model'=>$model));
elseif (is_null($model->id_mentor))
    $this->renderPartial('_form_mentor', array('model'=>$model));
else
    $this->redirect(array('view','id'=>$model->id_personagem));

?>