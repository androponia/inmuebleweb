<?php
/* @var $this UbicacionController */
/* @var $data Ubicacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idubicacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idubicacion), array('view', 'id'=>$data->idubicacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latitudlongitud')); ?>:</b>
	<?php echo CHtml::encode($data->latitudlongitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barrioid')); ?>:</b>
	<?php echo CHtml::encode($data->barrio->nombre); ?>
	<br />


</div>