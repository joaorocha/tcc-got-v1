<?php
/* @var $this PersonagemController */
/* @var $data Personagem */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_personagem')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_personagem), array('view', 'id'=>$data->id_personagem)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_personagem')); ?>:</b>
	<?php echo CHtml::encode($data->nome_personagem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gold_personagem')); ?>:</b>
	<?php echo CHtml::encode($data->gold_personagem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('xp_personagem')); ?>:</b>
	<?php echo CHtml::encode($data->xp_personagem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_level')); ?>:</b>
	<?php echo CHtml::encode($data->id_level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mentor')); ?>:</b>
	<?php echo CHtml::encode($data->id_mentor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('forca_personagem')); ?>:</b>
	<?php echo CHtml::encode($data->forca_personagem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inteligencia_personagem')); ?>:</b>
	<?php echo CHtml::encode($data->inteligencia_personagem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vitalidade_personagem')); ?>:</b>
	<?php echo CHtml::encode($data->vitalidade_personagem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agilidade_personagem')); ?>:</b>
	<?php echo CHtml::encode($data->agilidade_personagem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('defesa_personagem')); ?>:</b>
	<?php echo CHtml::encode($data->defesa_personagem); ?>
	<br />

	*/ ?>

</div>