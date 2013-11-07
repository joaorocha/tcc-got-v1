<?php
/* @var $this PersonagemController */
/* @var $model Personagem */

$this->breadcrumbs=array(
	'Personagems'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Personagem', 'url'=>array('index')),
	array('label'=>'Manage Personagem', 'url'=>array('admin')),
);
?>

<h1>Create Personagem</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>