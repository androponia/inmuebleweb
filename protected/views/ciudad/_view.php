<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idciudad')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idciudad),array('view','id'=>$data->idciudad)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paisid')); ?>:</b>
	<?php echo CHtml::encode($data->pais->nombre); ?>
	<br />


</div>