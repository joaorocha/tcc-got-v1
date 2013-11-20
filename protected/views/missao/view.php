<?php
/* @var $this MissaoController */
/* @var $model Missao */

$this->breadcrumbs=array(
	'Missaos'=>array('index'),
	$model->id_missao,
);

$this->menu=array(
	array('label'=>'List Missao', 'url'=>array('index')),
	array('label'=>'Create Missao', 'url'=>array('create')),
	array('label'=>'Update Missao', 'url'=>array('update', 'id'=>$model->id_missao)),
	array('label'=>'Delete Missao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_missao),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Missao', 'url'=>array('admin')),
);
?>

<h1>View Missao #<?php echo $model->id_missao; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_missao',
		'nome_missao',
		'descricao_missao',
		'duracao_missao',
		'min_xp_missao',
		'max_xp_missao',
		'min_gold_missao',
		'max_gold_missao',
	),
)); ?>
