<?php
/* @var $this DestacadoController */
/* @var $model Destacado */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'iddestacado'); ?>
		<?php echo $form->textField($model,'iddestacado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechainicio'); ?>
		<?php echo $form->textField($model,'fechainicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechafin'); ?>
		<?php echo $form->textField($model,'fechafin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idpropiedad'); ?>
		<?php echo $form->textField($model,'idpropiedad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->