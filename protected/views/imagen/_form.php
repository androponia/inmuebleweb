<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'imagen-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'orden', array('1'=>'1', '2'=>'2', '3'=>'3'), array('class'=>'span1')); ?>

	<?php echo $form->hiddenField($model,'propiedadid', CHtml::listData(Propiedad::model()->findAll(), 'idpropiedad', 'descripcion'),array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($model,'created_date',array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($model,'modified_date',array('class'=>'span5')); ?>

	<?php echo $form->hiddenField($model,'created_by',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->hiddenField($model,'modified_by',array('class'=>'span5','maxlength'=>128)); ?>

	<div class="row">
		<div class="span1">
	        <?php echo $form->labelEx($model,'archivo'); ?>
	        <?php echo CHtml::activeFileField($model, 'archivo'); ?>
	        <?php echo $form->error($model,'archivo'); ?>
			<?php echo CHtml::image(Yii::app()->baseUrl.'/images/'.$model->archivo,CHtml::encode($model->archivo),array('width'=>200));?>
        </div>
	</div><br>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Actualizar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>