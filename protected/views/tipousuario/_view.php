<?php
/* @var $this TipousuarioController */
/* @var $data Tipousuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtipousuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idtipousuario), array('view', 'id'=>$data->idtipousuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>