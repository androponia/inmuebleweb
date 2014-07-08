<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('iddestacado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->iddestacado),array('view','id'=>$data->iddestacado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechainicio')); ?>:</b>
	<?php echo CHtml::encode($data->fechainicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechafin')); ?>:</b>
	<?php echo CHtml::encode($data->fechafin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpropiedad')); ?>:</b>
	<?php echo CHtml::encode($data->idpropiedad); ?>
	<br />

</div>