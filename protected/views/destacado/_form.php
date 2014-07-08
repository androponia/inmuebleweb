<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'destacado-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->labelEx($model,'fechainicio'); ?>
	<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model'=>$model,
			'attribute'=>'fechainicio',
			'language'=>'es',
			'options'=>array(
			'dateFormat'=>'yy-mm-dd',
			'constrainInput'=>'false',
			'duration'=>'fast',
			'showAnim'=>'slide',
			),
		)); ?>


	<?php echo $form->labelEx($model,'fechafin'); ?>
	<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model'=>$model,
			'attribute'=>'fechafin',
			'language'=>'es',
			'options'=>array(
			'dateFormat'=>'yy-mm-dd',
			'constrainInput'=>'false',
			'duration'=>'fast',
			'showAnim'=>'slide',
			),
		)); ?>

	<?php echo $form->labelEx($model,'idpropiedad'); ?>
	<?php echo $form->dropDownList($model,'idpropiedad', CHtml::listData(Propiedad::model()->findAll(), 'idpropiedad', 'descripcion'),array('class'=>'span5')); ?>

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
