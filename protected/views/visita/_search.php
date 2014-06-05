<?php
/* @var $this VisitaController */
/* @var $model Visita */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idvisita'); ?>
		<?php echo $form->textField($model,'idvisita'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idpropiedad'); ?>
		<?php echo $form->textField($model,'idpropiedad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->