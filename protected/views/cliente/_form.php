<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'cliente-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($modelc, $modelu); ?>

	<?php echo $form->hiddenField($modelc,'idusuario',array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($modelc,'created_date',array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($modelc,'modified_date',array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($modelc,'created_by',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->hiddenField($modelc,'modified_by',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($modelu,'nombre',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($modelu,'apellido',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($modelu,'email',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->passwordFieldRow($modelu,'password',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($modelu,'telefono',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($modelu,'celular',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->dropDownList($modelu,'rol',array("Cliente"=>"Cliente"),array('empty'=>'Seleccione Rol')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$modelc->isNewRecord ? 'Crear' : 'Actualizar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
