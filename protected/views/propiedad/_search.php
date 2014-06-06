<?php
/* @var $this PropiedadController */
/* @var $model Propiedad */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idpropiedad'); ?>
		<?php echo $form->textField($model,'idpropiedad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'canthab'); ?>
		<?php echo $form->textField($model,'canthab'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantbano'); ?>
		<?php echo $form->textField($model,'cantbano'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'terreno'); ?>
		<?php echo $form->textField($model,'terreno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'construido'); ?>
		<?php echo $form->textField($model,'construido'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio'); ?>
		<?php echo $form->textField($model,'precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ingreso'); ?>
		<?php echo $form->textField($model,'ingreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'egreso'); ?>
		<?php echo $form->textField($model,'egreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clienteid'); ?>
		<?php echo $form->textField($model,'clienteid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'empleadoid'); ?>
		<?php echo $form->textField($model,'empleadoid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->