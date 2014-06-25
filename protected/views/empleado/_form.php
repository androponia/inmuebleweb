<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'empleado-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($modele, $modelu); ?>

	<?php echo $form->hiddenField($modele,'idusuario',array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($modele,'created_date',array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($modele,'modified_date',array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($modele,'created_by',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->hiddenField($modele,'modified_by',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($modelu,'nombre',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($modelu,'apellido',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($modelu,'email',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->passwordFieldRow($modelu,'password',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($modelu,'telefono',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($modelu,'celular',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->dropDownList($modelu,'rol',array("Empleado"=>"Empleado"),array('empty'=>'Seleccione Rol')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$modele->isNewRecord ? 'Crear' : 'Actualizar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
