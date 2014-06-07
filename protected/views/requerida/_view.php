<?php
/* @var $this RequeridaController */
/* @var $data Requerida */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idrequerida')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idrequerida), array('view', 'id'=>$data->idrequerida)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
	<?php echo CHtml::encode($data->apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barrioid')); ?>:</b>
	<?php echo CHtml::encode($data->barrio->nombre); ?>
	<br />


</div>