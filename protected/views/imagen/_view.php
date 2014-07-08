<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idimagen')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idimagen),array('view','id'=>$data->idimagen)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('archivo')); ?>:</b>
	<?php echo CHtml::encode($data->archivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orden')); ?>:</b>
	<?php echo CHtml::encode($data->orden); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />
</div>