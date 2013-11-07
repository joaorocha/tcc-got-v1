<?php
/* @var $this PersonagemController */
/* @var $model Personagem */

$this->breadcrumbs=array(
	'Personagems'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Personagem', 'url'=>array('index')),
	array('label'=>'Create Personagem', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#personagem-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Personagems</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'personagem-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_personagem',
		'nome_personagem',
		'gold_personagem',
		'xp_personagem',
		'id_level',
		'id_mentor',
		/*
		'id_usuario',
		'forca_personagem',
		'inteligencia_personagem',
		'vitalidade_personagem',
		'agilidade_personagem',
		'defesa_personagem',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
