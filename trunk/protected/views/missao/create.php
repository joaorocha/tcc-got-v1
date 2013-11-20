<?php
/* @var $this MissaoController */
/* @var $model Missao */

$this->breadcrumbs=array(
	'Missaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Missao', 'url'=>array('index')),
	array('label'=>'Manage Missao', 'url'=>array('admin')),
);
?>

<h1>Create Missao</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>