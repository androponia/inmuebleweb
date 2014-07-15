<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'hipoteca-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="span4">
			<?php echo $form->textFieldRow($model,'importedelprestamo',array('class'=>'span5','maxlength'=>10, 'required'=> true)); ?>
		</div>
	</div>

	<div class="row">
		<div class="span4">
			<?php echo $form->textFieldRow($model,'valorresidual',array('class'=>'span5','maxlength'=>10, 'required'=> true)); ?>
		</div>
	</div>

	<div class="row">
		<div class="span4">
			<?php echo $form->textFieldRow($model,'tasadeinteres',array('class'=>'span5', 'required'=> true)); ?>
		</div>
	</div>

	<div class="row">
		<div class="span4">
			<?php echo $form->textFieldRow($model,'meses',array('class'=>'span5', 'required'=> true)); ?>
		</div>
	</div><br>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Calculo Hipoteca',

		)); ?>

	</div>

<?php $this->endWidget(); ?>
