<?php
/* @var $this ImagenController */
/* @var $data Imagen */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idimagen')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idimagen), array('view', 'id'=>$data->idimagen)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('archivo')); ?>:</b>
	<?php echo CHtml::encode($data->archivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propiedadid')); ?>:</b>
	<?php echo CHtml::encode($data->propiedadid); ?>
	<br />


</div>