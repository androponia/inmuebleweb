<?php
/* @var $this VisitaController */
/* @var $data Visita */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idvisita')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idvisita), array('view', 'id'=>$data->idvisita)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpropiedad')); ?>:</b>
	<?php echo CHtml::encode($data->idpropiedad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />


</div>