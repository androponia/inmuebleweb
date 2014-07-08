<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nombre',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'apellido',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'telefono',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'celular',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->hiddenField($model,'tipousuarioid',array('class'=>'span5','maxlength'=>128)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
