<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idubicacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idubicacion),array('view','id'=>$data->idubicacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latitudlongitud')); ?>:</b>
	<?php echo CHtml::encode($data->latitudlongitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barrioid')); ?>:</b>
	<?php echo CHtml::encode($data->barrioid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propiedadid')); ?>:</b>
	<?php echo CHtml::encode($data->propiedadid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php echo CHtml::encode($data->created_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_date')); ?>:</b>
	<?php echo CHtml::encode($data->modified_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_by')); ?>:</b>
	<?php echo CHtml::encode($data->modified_by); ?>
	<br />

	*/ ?>

</div>