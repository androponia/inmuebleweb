<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'requerida-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="span4">
			<?php echo $form->textFieldRow($model,'nombre',array('class'=>'span5','maxlength'=>60)); ?>
		</div>
	</div>

	<div class="row">
		<div class="span4">
			<?php echo $form->textFieldRow($model,'apellido',array('class'=>'span5','maxlength'=>60)); ?>
		</div>
	</div>

	<div class="row">
		<div class="span4">
			<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>60)); ?>
		</div>
	</div>

	<div class="row">
		<div class="span4">
			<?php echo $form->textFieldRow($model,'descripcion',array('class'=>'span5','maxlength'=>150)); ?>
		</div>
	</div><br>

	<div class="row">
		<div class="span2">
			<?php echo $form->labelEx($model,'barrioid'); ?>
		</div>
	</div>

	<div class="row">
		<div class="span4">
				<?php echo $form->dropDownList($model,'barrioid', CHtml::listData(Barrio::model()->findAll(), 'idbarrio', 'nombre'),array('class'=>'span5', "empty"=>"Seleccione Barrio")); ?>
		</div>
	</div><br>

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
