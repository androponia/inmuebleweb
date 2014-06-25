<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'idpropiedad',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'canthab',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cantbano',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'terreno',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'construido',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'garage',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'jardin',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fondo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'precio',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'descripcion',array('class'=>'span5','maxlength'=>150)); ?>

	<?php echo $form->textFieldRow($model,'ingreso',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'egreso',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'clienteid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'empleadoid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'created_date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'modified_date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'created_by',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'modified_by',array('class'=>'span5','maxlength'=>128)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
