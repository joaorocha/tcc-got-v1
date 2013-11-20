<?php
$this->pageTitle=Yii::app()->name . ': Guia';
if (false)
    $this->renderPartial('pages/guide/_avancado');
elseif (false)
    $this->renderPartial('pages/guide/_intermediario');
else
    $this->renderPartial('pages/guide/_basico');
?>