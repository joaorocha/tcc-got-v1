<?php
/* @var $this PersonagemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Personagems',
);

$this->menu=array(
	array('label'=>'Create Personagem', 'url'=>array('create')),
	array('label'=>'Manage Personagem', 'url'=>array('admin')),
);
?>

<h1>Personagems</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
