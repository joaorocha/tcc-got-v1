<?php
/* @var $this MissaoController */
/* @var $data Missao */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_missao')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_missao), array('view', 'id'=>$data->id_missao)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_missao')); ?>:</b>
	<?php echo CHtml::encode($data->nome_missao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao_missao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao_missao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duracao_missao')); ?>:</b>
	<?php echo CHtml::encode($data->duracao_missao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_xp_missao')); ?>:</b>
	<?php echo CHtml::encode($data->min_xp_missao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_xp_missao')); ?>:</b>
	<?php echo CHtml::encode($data->max_xp_missao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_gold_missao')); ?>:</b>
	<?php echo CHtml::encode($data->min_gold_missao); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('max_gold_missao')); ?>:</b>
	<?php echo CHtml::encode($data->max_gold_missao); ?>
	<br />

	*/ ?>

</div>