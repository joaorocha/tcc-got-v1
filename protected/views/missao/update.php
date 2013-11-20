<?php
/* @var $this MissaoController */
/* @var $model Missao */

$this->breadcrumbs=array(
	'Missaos'=>array('index'),
	$model->id_missao=>array('view','id'=>$model->id_missao),
	'Update',
);

$this->menu=array(
	array('label'=>'List Missao', 'url'=>array('index')),
	array('label'=>'Create Missao', 'url'=>array('create')),
	array('label'=>'View Missao', 'url'=>array('view', 'id'=>$model->id_missao)),
	array('label'=>'Manage Missao', 'url'=>array('admin')),
);
?>

<h1>Update Missao <?php echo $model->id_missao; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>