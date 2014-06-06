<?php
/* @var $this PropiedadController */
/* @var $model Propiedad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'propiedad-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'canthab'); ?>
		<?php echo $form->textField($model,'canthab'); ?>
		<?php echo $form->error($model,'canthab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantbano'); ?>
		<?php echo $form->textField($model,'cantbano'); ?>
		<?php echo $form->error($model,'cantbano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'terreno'); ?>
		<?php echo $form->textField($model,'terreno'); ?>
		<?php echo $form->error($model,'terreno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'construido'); ?>
		<?php echo $form->textField($model,'construido'); ?>
		<?php echo $form->error($model,'construido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio'); ?>
		<?php echo $form->textField($model,'precio'); ?>
		<?php echo $form->error($model,'precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ingreso'); ?>
		<?php echo $form->textField($model,'ingreso'); ?>
		<?php echo $form->error($model,'ingreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'egreso'); ?>
		<?php echo $form->textField($model,'egreso'); ?>
		<?php echo $form->error($model,'egreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clienteid'); ?>
		<?php echo $form->textField($model,'clienteid'); ?>
		<?php echo $form->error($model,'clienteid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'empleadoid'); ?>
		<?php echo $form->textField($model,'empleadoid'); ?>
		<?php echo $form->error($model,'empleadoid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->