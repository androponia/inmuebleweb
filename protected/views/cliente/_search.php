<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($modelu,'idusuario',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($modelu,'nombre',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($modelu,'apellido',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($modelu,'email',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($modelu,'telefono',array('class'=>'span5','maxlength'=>128)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
