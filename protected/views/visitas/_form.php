<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'visitas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<?php echo $form->labelEx($model,'fecha'); ?>
	<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model'=>$model,
			'attribute'=>'fecha',
			'language'=>'es',
			'options'=>array(
			'dateFormat'=>'yy-mm-dd',
			'constrainInput'=>'false',
			'duration'=>'fast',
			'showAnim'=>'slide',
			),
		)); ?>

		<?php echo $form->labelEx($model,'hora'); ?>
		<?php $this->widget('CMaskedTextField', array(
			'model' => $model,
			'attribute' => 'hora',
			'mask' => '12:00',
			'htmlOptions' => array('size' => 5),
			));
		?>

	<?php echo $form->textFieldRow($model,'nombrecompleto',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'telefono',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'celular',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->labelEx($model,'idpropiedad'); ?>
	<?php echo $form->dropDownList($model,'idpropiedad', CHtml::listData(Propiedad::model()->findAll(), 'idpropiedad', 'descripcion'),array('class'=>'span5')); ?>

	<?php echo $form->labelEx($model,'idempleado'); ?>
	<?php echo $form->dropDownList($model,'idempleado', CHtml::listData(Usuario::model()->findAll(), 'idusuario', 'nombre', 'apellido')); ?>

	<?php echo $form->hiddenField($model,'created_date',array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($model,'modified_date',array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($model,'created_by',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->hiddenField($model,'modified_by',array('class'=>'span5','maxlength'=>128)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
