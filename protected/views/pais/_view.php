<?php
/* @var $this PaisController */
/* @var $data Pais */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpais')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpais), array('view', 'id'=>$data->idpais)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>