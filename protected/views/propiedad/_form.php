<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'propiedad-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="span3">
			<?php echo $form->labelEx($model,'canthab');?>
			<?php echo $form->dropDownList($model,'canthab', array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'), array('class'=>'span1')); ?>
		</div>
		<div class="span2 offset1">
			<?php echo $form->labelEx($model,'cantbano');?>
			<?php echo $form->dropDownList($model,'cantbano', array('1'=>'1', '2'=>'2', '3'=>'3'), array('class'=>'span1')); ?>
		</div>
	</div>

	<div class="row">
		<div class="span2">
			<?php echo $form->textFieldRow($model,'terreno',array('class'=>'span2')); ?>
		</div>
		<div class="span2 offset2">
			<?php echo $form->textFieldRow($model,'construido',array('class'=>'span2')); ?>
		</div>
	</div>

	<div class="row">
		<div class="span2">
			<?php echo $form->labelEx($model,'jardin');?>
			<?php echo $form->dropDownList($model,'jardin', array(0=>'Si', 1=>'No'), array('class'=>'span1')); ?>
		</div>
		<div class="span2">
			<?php echo $form->labelEx($model,'fondo');?>
			<?php echo $form->dropDownList($model,'fondo', array(0=>'Si', 1=>'No'), array('class'=>'span1')); ?>
		</div>
		<div class="span2">
			<?php echo $form->labelEx($model,'garage');?>
			<?php echo $form->dropDownList($model,'garage', array(0=>'Si', 1=>'No'), array('class'=>'span1')); ?>
		</div>
	</div>

	<div class="row">
		<div class="span4">
			<?php echo $form->textFieldRow($model,'precio',array('class'=>'span5')); ?>
		</div>
	</div>

	<div class="row">
		<div class="span4">
			<?php echo $form->textFieldRow($model,'descripcion',array('class'=>'span5','maxlength'=>150)); ?>
		</div>
	</div>

	<?php echo $form->labelEx($model,'ingreso'); ?>
	<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model'=>$model,
			'attribute'=>'ingreso',
			'language'=>'es',
			'options'=>array(
			'dateFormat'=>'yy-mm-dd',
			'constrainInput'=>'false',
			'duration'=>'fast',
			'showAnim'=>'slide',
			),
		)); ?>
	
	<?php echo $form->labelEx($model,'egreso'); ?>
	<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model'=>$model,
			'attribute'=>'egreso',
			'language'=>'es',
			'options'=>array(
			'dateFormat'=>'yy-mm-dd',
			'constrainInput'=>'false',
			'duration'=>'fast',
			'showAnim'=>'slide',
			),
		)); ?>

	<div class="row">
		<div class="span8">
			<?php echo $form->labelEx($model,'clienteid'); ?>
			<?php echo $form->dropDownList($model,'clienteid', CHtml::listData(Usuario::model()->findAllByAttributes(array('tipousuarioid'=>4)), 'idusuario', 'nombre', 'apellido')); ?>
			<?php echo $form->labelEx($model,'empleadoid'); ?>
			<?php echo $form->dropDownList($model,'empleadoid', CHtml::listData(Usuario::model()->findAllByAttributes(array('tipousuarioid'=>array(1,2,3))), 'idusuario', 'nombre', 'apellido')); ?>
		</div>
	</div>


	<?php echo $form->hiddenField($model,'created_date',array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($model,'modified_date',array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($model,'created_by',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->hiddenField($model,'modified_by',array('class'=>'span5','maxlength'=>128)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Actualizar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>