<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'destacado-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="span2">
			<?php echo $form->labelEx($model,'idpropiedad'); ?>
		</div>
	</div>

	<div class="row">
		<div class="span2">
			<?php echo $form->dropDownList($model,'idpropiedad', CHtml::listData(Propiedad::model()->findAll(), 'idpropiedad', 'descripcion'),array('class'=>'span5', "empty"=>"Seleccione Propiedad")); ?>
			<?php echo $form->error($model,'idpropiedad'); ?>
		</div>
	</div>

	<div class="row">
		<div class="span4">
			<?php echo $form->labelEx($model,'fechainicio'); ?>
			<div class="row">
				<?php
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
						'model'=>$model,
						'attribute'=>'fechainicio',
						'language'=>'es',
						'options'=>array(
						'dateFormat'=>'yy-mm-dd',
						'constrainInput'=>'false',
						'duration'=>'fast',
						'showAnim'=>'slide',
						),
					)); ?>
			</div>
		</div>
		<div class="span4">
			<?php echo $form->labelEx($model,'fechafin'); ?>
			<div class="row">
			<?php
				$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$model,
					'attribute'=>'fechafin',
					'language'=>'es',
					'options'=>array(
					'dateFormat'=>'yy-mm-dd',
					'constrainInput'=>'false',
					'duration'=>'fast',
					'showAnim'=>'slide',
					),
				)); ?>
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
