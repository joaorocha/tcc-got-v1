<?php
/* @var $this PersonagemController */
/* @var $model Personagem */

$this->breadcrumbs=array(
	'Personagems'=>array('index'),
	$model->id_personagem=>array('view','id'=>$model->id_personagem),
	'Update',
);

$this->menu=array(
	array('label'=>'List Personagem', 'url'=>array('index')),
	array('label'=>'Create Personagem', 'url'=>array('create')),
	array('label'=>'View Personagem', 'url'=>array('view', 'id'=>$model->id_personagem)),
	array('label'=>'Manage Personagem', 'url'=>array('admin')),
);
?>

<h1>Update Personagem <?php echo $model->id_personagem; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>